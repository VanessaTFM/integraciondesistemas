<?php
 
namespace App\Http\Controllers\v1;
 
use App\Http\Controllers\Controller;
use App\Models\User;
 
class AlumnosController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function getAll()
    {
       $alumnos = [];

        $alumno=new \stdClass();

        $alumno->id="b60b00d9-43f7-4ea9-ae37-1fbca6121b43";
        $alumno->codigo="A001";
        $alumno->nombres="Vanessa Flores";

        $alumnos[]=$alumno;
        $response ->success=true;
        $response ->data=$alumnos;

        return response()->json($response,200);
    }
}