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
        ]);
        
        Grade::factory(10)->create();

        User::factory()->create(['name'=> 'ales', 'email'=> 'ales@nevermore.com', 'isTeacher'=>true]);
        User::factory()->create(['name'=> 'macarrones', 'email'=> 'macarrones@nevermore.com', 'isTeacher'=> false]);
        User::factory(5)->create();*/
        User::factory()->create(['name'=> 'ales', 'surname'=> 'addams', 'email'=> 'ales@nevermore.com', 'isTeacher'=>true]);
        User::factory()->create(['name'=> 'macarrones', 'surname'=> 'addams', 'email'=> 'macarrones@nevermore.com', 'isTeacher'=> false]);
        User::factory(2)->create();
        Grade::factory()->create();
    }
}
