<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sign_upController extends Controller {

    public function create(Request $userData) {
       
        if($userData->type == "student") {
            $studentData = $userData->only('name', 'surname', 'password', 'email', 'career');
            $student = Student::create($studentData);
            // Auth::login($student);


        } else if ($userData->type == 'admin') {
            $adminData = $userData->only('name', 'surname', 'password', 'email');
            $admin = Admin::create($adminData);
            Auth::login($admin);

        } else {
            return response()->json([
                'message' => 'Favor de validar el tipo de usuario a crear',
                'usuario' => $userData->type,
                'success' => false
            ]);
        }
        
        return response()->json([
            'message' => 'Registro completado exitosamente',
            'success' => true,
        ]);

        

    }

    public function token() {
 echo csrf_token();
     }

    // public function edit($id)
    // {

    // }

    // public function update(Request $request, $id)
    // {

    // }
}
