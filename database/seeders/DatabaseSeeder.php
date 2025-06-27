<?php

namespace Database\Seeders;
 



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Secretaria;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Consultorio;
use App\Models\Horario;
use App\Models\Configuracione;
use App\Models\Paciente;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;






class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            
        ]);
     User::create([
            'name' => 'administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin1324')
        ])->assignRole('admin');
    


        User::create([
            'name' => 'Secretaria',
            'email' => 'secretaria@gmail.com',
            'password' => Hash::make('20237397')
        ])->assignRole('secretaria');

        Secretaria::create([
            'nombres' => 'Secretaria',
            'apellidos' => '1',
            'dni' => '12345678',
            'celular' => '2612345678',
            'fecha_nacimiento' => '19/01/2001',
            'direccion' => 'Calle Falsa 123',
            'user_id' => '2'  
        ]);          


        User::create([
            'name' => 'doctor1',
            'email' => 'doctor1@gmail.com',
            'password' => Hash::make('20237398')
        ])->assignRole('doctor');
        Doctor::create([
            'nombres' => 'doctor1',
            'apellidos' => 'Rodriguez',
            'telefono' => '12345678',
            'licencia_medica' => '2612345678',
            'especialidad' => 'psiquiatría',
            
            'user_id' => '3'  
             ]); 
        
        User::create([
            'name' => 'doctor2',
            'email' => 'doctor2@gmail.com',
            'password' => Hash::make('20237398')
        ])->assignRole('doctor');

        Doctor::create([
            'nombres' => 'doctor2',
            'apellidos' => 'Martinez',
            'telefono' => '12345678',
            'licencia_medica' => '261298345678',
            'especialidad' => 'pediatría',
            
            'user_id' => '4'  
             ]); 
        
        
        User::create([
            'name' => 'doctor3',
            'email' => 'doctor3@gmail.com',
            'password' => Hash::make('20237398')
        ])->assignRole('doctor');
        Doctor::create([
            'nombres' => 'doctor3',
            'apellidos' => 'Alvarez',
            'telefono' => '12345678',
            'licencia_medica' => '26123459678',
            'especialidad' => 'ginecología',
            
            'user_id' => '5'  
             ]); 

        Consultorio::create([
            'nombre' => 'Consultorio 1',
            'ubicacion' => 'Primer piso - Sala 1',
            'capacidad' => '8',
            'telefono' => '2612345678',
            'especialidad' => 'psiquiatría',
            'estado' => 'activo'
            
        ]);

        Consultorio::create([
            'nombre' => 'Consultorio 2',
            'ubicacion' => 'Primer piso - Sala 2',
            'capacidad' => '8',
            'telefono' => '2612345678',
            'especialidad' => 'dermatología',
            'estado' => 'activo'
            
        ]);

        Consultorio::create([
            'nombre' => 'Consultorio 3',
            'ubicacion' => 'Primer piso - Sala 3',
            'capacidad' => '8',
            'telefono' => '2612345678',
            'especialidad' => 'pediatría',
            'estado' => 'activo'
            
        ]);


        User::create([
            'name' => 'paciente1',
            'email' => 'paciente1@gmail.com',
            'password' => Hash::make('20237399')
        ])->assignRole('paciente');

        User::create([
            'name' => 'usuario1',
            'email' => 'usuario1@gmail.com',
            'password' => Hash::make('20237390')
        ])->assignRole('usuario');

        ///creacion de horarios
        Horario::create([
            'dia'=> 'JUEVES',
            'hora_inicio' => '08:00:00',
            'hora_FIN' => '16:00:00',
            'doctor_id' => '1',
            'consultorio_id' => '1'

    ]);
    

    Configuracione::create([
        'nombre' => 'Clinica Medica',
        'direccion' => 'Calle Falsa 123',
        'telefono' => '2612345678',
        'correo' => 'clinica@gmail.com',
        'logo' => 'logos/LqrULcm3UKmil07nQR1IU8K1ABCqWYx8akr2PKX6.jpg'
    ]);     
}

    
}
    
