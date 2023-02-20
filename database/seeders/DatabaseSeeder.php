<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Grade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        /*Grade::factory()->create([
            'maths'=> '6',
            'history'=> '6',
            'geography'=> '6',
            'english'=> '6',
            'literature'=> '6',
        ]);*/
        
        User::factory()->create(['name'=> 'ales', 'surname'=> 'addams', 'email'=> 'ales@nevermore.com', 'currentTerm'=> '2022-2023', 'img'=> 'img/outcast01.PNG', 'isTeacher'=>true]);
        User::factory()->create(['name'=> 'macarrones', 'surname'=> 'addams', 'email'=> 'macarrones@nevermore.com','currentTerm'=> '2022-2023','img'=> 'img/outcast01.PNG', 'isTeacher'=> false]);
        Grade::factory()->create(); 

        User::factory()->create([
            'name'=> 'Wednesday',
            'surname'=> 'Addams',
            'email'=> 'wednesdayaddams@nevermoreacademy.com',
            'currentTerm'=> '2022-2023',
            'img'=> 'img/outcast01.PNG',
            'isTeacher'=> false,
            ]);
    
        User::factory()->create([
            'name'=> 'Enid',
            'surname'=> 'Sinclair',
            'email'=> 'enidsinclair@nevermoreacademy.com',
            'currentTerm'=> '2022-2023',
            'img'=> 'img/outcast07.PNG',
            'isTeacher'=> false,
            ]);    
    
        User::factory()->create([
            'name'=> 'Xavier',
            'surname'=> 'Thorpe',
            'email'=> 'xavierthorpe@nevermoreacademy.com',
            'currentTerm'=> '2022-2023',
            'img'=> 'img/outcast03.PNG',
            'isTeacher'=> false,
            ]);   
    
        User::factory()->create([
            'name'=> 'Bianca',
            'surname'=> 'Barclay',
            'email'=> 'biancabarclay@nevermoreacademy.com',
            'currentTerm'=> '2022-2023',
            'img'=> 'img/outcast02.PNG',
            'isTeacher'=> false,
            ]);        
    
        User::factory()->create([
            'name'=> 'Eugene',
            'surname'=> 'Otinger',
            'email'=> 'eugeneotinger@nevermoreacademy.com',
            'currentTerm'=> '2022-2023',
            'img'=> 'img/outcast04.PNG',
            'isTeacher'=> false,
            ]);  
    
        User::factory()->create([
            'name'=> 'Ajax',
            'surname'=> 'Petropolus',
            'email'=> 'ajaxpetropolus@nevermoreacademy.com',
            'currentTerm'=> '2022-2023',
            'img'=> 'img/outcast05.PNG',
            'isTeacher'=> false,
            ]); 
    
        User::factory()->create([
            'name'=> 'Yoko',
            'surname'=> 'Tanaka',
            'email'=> 'yokotanaka@nevermoreacademy.com',
            'currentTerm'=> '2022-2023',
            'img'=> 'img/outcast06.PNG',
            'isTeacher'=> false,
            ]); 
    
        User::factory()->create([
            'name'=> 'Ignatius',
            'surname'=> 'Itt',
            'email'=> 'ignatiusitt@nevermoreacademy.com',
            'currentTerm'=> '2022-2023',
            'img'=> 'img/outcast08.PNG',
            'isTeacher'=> false,
            ]);
    }
}
