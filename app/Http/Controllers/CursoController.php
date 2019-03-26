<?php

namespace App\Http\Controllers;

use DB;
use App\Curso;
//use App\Http\Request;
 use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;





class CursoController extends Controller
{

  /*  function __construc(){
        $this->middleware('auth',['except'=>['create','store']]);
    }
    */
    public function index()
    {
         $cursos = Curso::all();

          // $cursos = DB::table('curso')->get();

        return view('curso.index',compact('cursos'));
    }

   
    public function create()
    {
       // return "hola";
        return view('curso.create');
    }

   

    public function store(Request $request)
    {
           DB::table('curso')->insert([
                "nombre" => $request->input('nombre'),
                "tipo" => $request->input('tipo'),
                "objetivo" => $request->input('objetivo'),
                "fechaInicio" => $request->input('fechaInicio'),
                "fechaFin" => $request->input('fechaFin'),
                "lugar" => $request->input('lugar'),
                "duracion" => $request->input('duracion'),
                "horaInicio" => $request->input('horaInicio'),
                "horaFin" => $request->input('horaFin'),
                "dirigido" => $request->input('dirigido'),
                "observaciones" => $request->input('observaciones'),
                "cupo" => $request->input('cupo'),
                "diplomado" => $request->input('diplomado')
            ]);


            //Model::unguard();

          // dd($request->all());

           // Curso::create($request->all());
            return redirect()->route('curso.index');
    }


    

    public function show($id)
    {
        $curso = Curso::findOrFail($id);

       // $curso = DB::table('curso')->where('cursoID',$id)->first();

        return view('curso.show',compact('curso'));
    }




    public function edit($id)
    {
         //$curso = Curso::findOrFail($id);
         //$message = DB::table('messages')->where('id',$id)->first();

        //$curso = DB::table('curso')->where('cursoID',$id)->first();


        $curso = Curso::findOrFail($id);

      return view('curso.edit',compact('curso'));
    }



   
    public function update(Request $request, $id)
    {
         //Curso::findOrFail($id)->update($request->all());
   

            DB::table('curso')->where('cursoID',$id)->update([
                "nombre" => $request->input('nombre'),
                "tipo" => $request->input('tipo'),
                "objetivo" => $request->input('objetivo'),
                "fechaInicio" => $request->input('fechaInicio'),
                "fechaFin" => $request->input('fechaFin'),
                "lugar" => $request->input('lugar'),
                "duracion" => $request->input('duracion'),
                "horaInicio" => $request->input('horaInicio'),
                "horaFin" => $request->input('horaFin'),
                "dirigido" => $request->input('dirigido'),
                "observaciones" => $request->input('observaciones'),
                "cupo" => $request->input('cupo'),
                "diplomado" => $request->input('diplomado')
            ]);


           // Curso::findOrFail($id)->update($request->all());





          return redirect()->route('curso.index');
    }



    public function destroy($id)
    {
        Curso::findOrFail($id)->delete();

    return redirect()->route('curso.index');
    }
}
