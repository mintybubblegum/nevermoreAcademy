<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Grade;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CRUDGradeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

/*    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }*/
    public function test_listGradesAppearInHomeView(){
        $this->withExceptionHandling();

        $userTeacher = User::factory()->create(['isTeacher'=> true]);
        $this->ActingAs($userTeacher);  

        $grades = Grade::factory(2)->create();
        $grade = $grades[0];

        $response = $this->get('/');

        $response->assertSee($grade->maths1); /*está bien esto?*/

        $response->assertStatus(200)
                ->assertViewIs('home');
    }

    public function test_aGradeCanBeDeletedByTeacherAndCanNotDeleteIfNoTeacher(){
        $this->withExceptionHandling();

        $userTeacher = User::factory()->create(['isTeacher'=> true]);
        $this->ActingAs($userTeacher);  

        $grade = Grade::factory()->create();
        $this->assertCount(1, Grade::all());

        $this->ActingAs($userTeacher);     
        $response = $this->delete(route('deleteGrade', $grade->id));
        $this->assertCount(0, Grade::all());/*Aunque salga test, ver si está mal*/

        $userNoTeacher = User::factory()->create(['isTeacher'=> false]);
        $this->ActingAs($userNoTeacher);     
        $response = $this->delete(route('deleteGrade', $grade->id));
        $this->assertCount(0, Grade::all());/*Aunque salga test, ver si está mal*/
    }

    public function test_aGradeCanBeCreatedByTeacherAndCanNotCreatedIfNoTeacher(){
        $this->withExceptionHandling();

        $userTeacher = User::factory()->create(['isTeacher'=> true]);
        $this->ActingAs($userTeacher);  
        $response = $this->post(route('storeGrade'),
        [
            'maths1'=> 'maths1',
            'history1'=> 'history1',
            'geography1'=> 'geography1',
            'english1'=> 'english1',
            'literature1'=> 'literature1',
        ]);
        $this->assertCount(1, Grade::all());

        $userNoTeacher = User::factory()->create(['isTeacher'=> false]);
        $this->ActingAs($userNoTeacher);  
        $response = $this->post(route('storeGrade'),
        [
            'maths1'=> 'maths1',
            'history1'=> 'history1',
            'geography1'=> 'geography1',
            'english1'=> 'english1',
            'literature1'=> 'literature1',
        ]);
        $this->assertCount(1, Grade::all());
    }

    public function test_aGradeCanBeUpdatedByTeacherAndCanNotCreatedIfNoTeacher(){
        $this->withExceptionHandling();

        $userTeacher = User::factory()->create(['isTeacher'=> true]);
        $this->ActingAs($userTeacher); 

        $grade = Grade::factory()->create();
        $this->assertCount(1, Grade::all());

        $userTeacher = User::factory()->create(['isTeacher'=> true]);
        $this->ActingAs($userTeacher);     
        $response = $this->patch(route('updateGrade', $grade->id), ['maths1' => '1']);
        $this->assertEquals('1', Grade::first()->maths1);/*está mal esto?*/

        $userNoTeacher = User::factory()->create(['isTeacher'=> true]);
        $this->ActingAs($userNoTeacher);     
        $response = $this->patch(route('updateGrade', $grade->id), ['maths1' => '1']);
        $this->assertEquals('1', Grade::first()->maths1);/*está mal esto?*/
    }
}
