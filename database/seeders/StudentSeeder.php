<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    public function run()
    {
        DB::table('students')->insert([
            // 'name' => 'Juan',
            // 'surname' => 'Morales Zapata',
            // 'password' => bcrypt('jMorales'),
            // 'career' => 'software',
            // 'email' => '201900568@estudiantes.upqroo.edu.mx',
        ]);

        $data = [
            [
                'name' => 'Andrea',
                'surname' => 'Medina Ramirez',
                'password' => 'aMe*Ra',
                'career' => 'Terapia Fisica',
                'mail' => '201900963@estudiantes.upqroo.edu.mx',
            ],
            [
                'name' => 'Juan',
                'surname' => 'Morales Zapata',
                'password' => 'jMo*Za',
                'career' => 'Software',
                'mail' => '201900753@estudiantes.upqroo.edu.mx',
            ],
            [
                'name' => 'Jorge',
                'surname' => 'Poot Castañeda',
                'password' => 'jMo*Za',
                'career' => 'Software',
                'mail' => '201900753@estudiantes.upqroo.edu.mx',
            ],
        ];

        $data = [
            [
                'Andrea',
                'Medina Ramirez',
                'aMe*Ra',
                'Terapia Fisica',
                '201900963@estudiantes.upqroo.edu.mx',
            ],
            [
                'Juan',
                'Morales Zapata',
                'jMo*Za',
                'Software',
                '201900753@estudiantes.upqroo.edu.mx',
            ],
            [
                'Jorge',
                'Poot Castañeda',
                'jMo*Za',
                'Software',
                '201900753@estudiantes.upqroo.edu.mx',
            ],
        ];


        for($i= 0; $i < count($data); $i++) {
            for($j= 0; $j < count($data[$i]); $j++) {

                DB::table('students')->insert([	            
                    'name' => $data[$i][$j],
                    'surname' => $data[$i][$j],
                    'surname' => $student->surname,
                    'password' => bcrypt($student->password),
                    'career' => $student->career,
                    'email' => $student->mail,
                ]);
            }
        }
        
        foreach ($data as $student) {
          DB::table('students')->insert([	            
              'name' => $student->name,
              'surname' => $student->surname,
              'password' => bcrypt($student->password),
              'career' => $student->career,
              'email' => $student->mail,
          ]);
        }


        $arrays = range(0,20);
        foreach ($arrays as $asd) {
          DB::table('students')->insert([	            
              'name' => Str::random(10),
              'surname' => Str::random(10),
              'password' => bcrypt('upqroo2022'),
              'career' => Str::random(10),
              'email' => Str::random(30),
          ]);
        }
    }
}
