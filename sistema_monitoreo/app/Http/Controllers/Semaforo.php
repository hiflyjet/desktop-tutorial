<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semaforo as SemaforoModel;
use App\Models\HistorialSemaforo;
use App\Models\Estaciones;

use Illuminate\Support\Facades\DB;



use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;



class Semaforo extends Controller
{
	public function create(Request $request){
		$input = $request->all();
		$semaforo = SemaforoModel::where("empresa",$input["empresa"])
			->where("estacion",$input["estacion"])
			->first();
			$estacion=Estaciones::where("id",$input["estacion"])->first();

		if(empty($estacion)){
			return response()
            ->json(["success"=>false,"message"=>"El id de estacion no existe."]);
		}	
		if(!in_array($input["estatus"], [0,1])){
			return response()
            ->json(["success"=>false,"message"=>"El valor de estatus solo puede ser 1 o 0."]);
		}
		$input["fecha"]=now();
		HistorialSemaforo::create($input);
		if(!empty($semaforo)){
			$semaforo->update([
				"estatus"=>$input["estatus"],
				"fecha"=>now()
			]);
			return response()
            ->json(["success"=>true,"message"=>"Actualizado correctamente!"]);
		}else{
			
			SemaforoModel::create($input);
			return response()
            ->json(["success"=>true,"message"=>"Registrado correctamente!"]);
		}
	}
	public function get(){
		$data = Estaciones::leftJoin("semaforo","semaforo.estacion","=","estaciones.id")
			->orderBy("estaciones.id","asc")
			->orderBy("semaforo.estatus","asc")
			->selectRaw("*,estaciones.id as idEstacion")
			->get();
		
		return response()
            ->json($data);
	}
	public function getEstaciones(){
		$data = Estaciones::get()->toArray();
		
		return $data;
	}
	public function post(Request $request){


$spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    //$sheet->setCellValue('A1', 'Hello World !');

    $spreadsheet->setActiveSheetIndex(0);

    $filename = 'reporte';

     header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
     header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
     header('Cache-Control: max-age=0');



		$res=DB::statement('SET @col1 := 3;');
		$rows=DB::select('SELECT *  from (
					SELECT hs1.fecha, if(hs1.estatus=1,"ENCENDIDO","APAGADO") as statusName,
						IF(@col1!=hs1.estatus,(@col1 := hs1.estatus),"NO") as Cambio,
						@col1,
						e.nombre
					FROM
					    historial_semaforo as hs1 join estaciones as e on hs1.estacion=e.id
					WHERE
					    hs1.estacion = '.$request->input("estacion").'
			    ) as t
			    where t.Cambio!="NO"');
		

	$count = 2;
	foreach($rows as $row){
	    $spreadsheet->getActiveSheet()->fromArray(array($row->statusName, $row->nombre, $row->fecha), null, 'A'.$count);
	    $count++;
	}



    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');

    $writer->save('php://output');
/*
exit;



		$res=DB::statement('SET @col1 := 3;');
		$res=DB::select('SELECT * from (SELECT *,IF(@col1!=hs1.estatus,(@col1 := hs1.estatus),"NO") as Cambio,@col1
			FROM
			    historial_semaforo as hs1
			WHERE
			    hs1.estacion = '.$request->input("estacion").'
			    ) as t
			    where t.Cambio!="NO"');
		var_dump($res);
		exit;
		$data = Estaciones::leftJoin("semaforo","semaforo.estacion","=","estaciones.id")
			->orderBy("estaciones.id","asc")
			->orderBy("semaforo.estatus","asc")
			->selectRaw("*,estaciones.id as idEstacion")
			->get();
		
		return response()
            ->json($data);
            */
	}
}
