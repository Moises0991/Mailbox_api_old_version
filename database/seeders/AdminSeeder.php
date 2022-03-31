<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        function admin($name, $surname, $password, $email) {
            DB::table('admins')->insert([	            
                'name' => $name,
                'surname' => $surname,
                'password' => bcrypt($password),
               
                'email' => $email,
                // 'timestamps' => date_default_timezone_get(),
            ]);
        }

     admin('Juana', 'Morales Zapata', 'jMo*Za', 'a201900753@estudiantes.upqroo.edu.mx');
     admin('Andreaa', 'Medina Ramirez', 'aMe*Ra', 'a201900963@estudiantes.upqroo.edu.mx');
     admin('Jorgea', 'Poot Castañeda', 'jMo*Za', 'a201900353@estudiantes.upqroo.edu.mx');
     admin('Jose','Molar Garcia','jMo*Ga','a201900088@estudiantes.upqroo.edu.mx');
     admin('Raulaa','Valencia Medina', 'rVa*Me', 'a201900099@estudiantes.upqroo.edu.mx');
     admin('Samuela', 'Nuñes Zavala', 'sNu*Za', 'a201900599@estudiantes.upqroo.edu.mx');
     admin('Natalya', 'Castañeda Dzul', 'nCa*Dz', 'a201900299@estudiantes.upqroo.edu.mx');

    }
}
