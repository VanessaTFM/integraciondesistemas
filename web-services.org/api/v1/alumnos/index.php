<?
$response =new\stdClass();
$alumnos = [];

$alumno=new \stdClass();

$alumno->id="b60b00d9-43f7-4ea9-ae37-1fbca6121b43";
$alumno->codigo="A001";
$alumno->nombres="Vanessa Flores";

$alumnos[]=$alumno;
$response ->success=true;
$response ->data=$alumnos;

echo json_encode($response);