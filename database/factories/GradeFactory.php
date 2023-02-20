<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::all()->random();
        return [
            //
            'maths1'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'maths2'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'maths3'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'maths4'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'maths5'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'maths6'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'maths7'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'maths8'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'maths9'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'history1'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'history2'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'history3'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'history4'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'history5'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'history6'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'history7'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'history8'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'history9'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'geography1'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'geography2'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'geography3'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'geography4'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'geography5'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'geography6'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'geography7'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'geography8'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'geography9'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'english1'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'english2'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'english3'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'english4'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'english5'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'english6'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'english7'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'english8'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'english9'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'lenguage1'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'lenguage2'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'lenguage3'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'lenguage4'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'lenguage5'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'lenguage6'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'lenguage7'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'lenguage8'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'lenguage9'=> $this->faker->biasedNumberBetween($min = 1, $max = 9, $function = 'sqrt'),
            'user_id' => $user->id,
            /*'user_name' => $user->name,*/
        ];
    }
}
