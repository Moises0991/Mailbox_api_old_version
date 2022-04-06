<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\Student;

use App\Http\Requests\StorecommentRequest;
use App\Http\Requests\UpdatecommentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{


    public function create(Request $newData)
    {
        $commentUpqroo = $newData->only('idNoticia', 'idUsuario', 'comentario','tipo');
        comment::create($commentUpqroo);
    }


//    students  admins
    public function show($idNoticia)
    {
        $showCom = DB::table('comments');
        $showCom->all();
    
        
        
        return ['data' => $showCom];
    }

  
    

    

}

  /*
    public function index()
    {
        //
    }

    public function store(StorecommentRequest $request)
    {
        //
    }
    public function edit(comment $comment)
    {
        //
    }

    
    public function update(UpdatecommentRequest $request, comment $comment)
    {
        //
    }


    public function destroy(comment $comment)
    {
        
    }
*/
