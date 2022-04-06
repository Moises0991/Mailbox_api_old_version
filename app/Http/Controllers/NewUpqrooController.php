<?php

namespace App\Http\Controllers;

use App\Models\NewUpqroo;
use App\Http\Requests\StoreNewUpqrooRequest;
use App\Http\Requests\UpdateNewUpqrooRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewUpqrooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $newData)
    {
        //aqui creamos las noticias id_noticias, id_usuario, dir_imagen, 
        //descripcion, cant_reacciones, cant_Comentarios
        $newUpqroo = $newData->only('id_Usuario','dir_Imagen','descripcion','cant_Reacciones','cant_Comentarios');
        NewUpqroo::create($newUpqroo);

        return response()->json([
            'message' => 'Registro completado exitosamente',
            'success' => true,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewUpqrooRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewUpqrooRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewUpqroo  $newUpqroo
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // esta permitira mostrar todas las noticias
        return NewUpqroo::all();

        
    }

    public function showFilter(Request $newFilter){


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewUpqroo  $newUpqroo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
      $editNew = DB::table('new_upqroos');
      
      return ['data'=>  $editNew->where('id',$id)->first()];
              
      
    
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewUpqrooRequest  $request
     * @param  \App\Models\NewUpqroo  $newUpqroo
     * @return \Illuminate\Http\Response
     * UpdateNewUpqrooRequest $request, NewUpqroo $newUpqroo
     */
    public function update(Request $editUpqroo, $id)
    {
         $editNew = DB::table('new_upqroos');
          //  $idUsuario  = necesito igualarlo a la seccion activa;
          $idUsuario  = $editUpqroo-> id_Usuario;
          $dirImagen  = $editUpqroo-> dir_Imagen;
          $descripcion=$editUpqroo->descripcion;

          $actualizar=NewUpqroo::where('id', $id)->first();
                     $actualizar->id_Usuario=$idUsuario;
                     $actualizar->dir_Imagen=$dirImagen;
                     $actualizar->descripcion=$descripcion;
                     $actualizar->save();


                     return response()->json([
                        'message' => 'Registro actualizado exitosamente',
                        'success' => true,
                    ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewUpqroo  $newUpqroo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        NewUpqroo::where('id', $id)->first()->delete();

          return response()->json([
            'message' => 'Registro elimando exitosamente',
            'success' => true,
        ]);

    }
}
