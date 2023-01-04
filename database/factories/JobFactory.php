<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::find(rand(1, User::count()));
        $company = Company::find(rand(1, Company::count()));

        return [
        'user_id' => $user->id,
        'company_id'=> $company->id,
        'title'=>$this->faker->text,
        'slug'=>Str::slug('$title'),
        'position'=>$this->faker->jobTitle,
        'address'=>$this->faker->address,
        'category_id'=> random_int(1,5),
        'type'=>'fulltime',
        'status'=>random_int(0,1),
        'description'=>$this->faker->text(),
        'roles'=>$this->faker->text(),
        'last_date'=>$this->faker->date(),
        'number_of_vacancy'=>random_int(1,10),
        'experience'=>random_int(1,10),
        'gender'=>$this->faker->randomElement(['male', 'female']),
        'salary'=>random_int(10000,50000)
        ];
    }
}
