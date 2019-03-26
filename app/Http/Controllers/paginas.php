<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginas extends Controller
{


public function __construct(){
    $this->middleware('administrar',['only'=>['administrar']]);
     $this->middleware('asignar',['only'=>['AsignarInstructorCurso']]);

}


    public function index(){
    	return view('index');
    }

    public function nav(){
        return view('nav_bar');
    }

    public function administrar(){
    	return view('Administrar');
    }

    public function AsignarInstructorCurso(){
    	return view('AsignarInstructorCurso');
    }

    public function Doc(){
    	return view('Docente');
    }

    public function Inst(){
    	return view ('Intructor');
    }

    public function Asis(){
    	return view('Asistencias');
    }

    public function Report(){
    	return view ('Reportes');
    }

    public function Ajus(){
    	return view ('Ajustes');
    }
    
}
