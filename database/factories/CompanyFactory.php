<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::find(rand(1, User::count()));
        return [
        'user_id' => $user->id,
        'cname'=>$name=$this->faker->company,
        'slug'=>str::slug($name),
        'address'=>$this->faker->address,
        'phone'=>$this->faker->phoneNumber,
        'website'=>$this->faker->domainName,
        'logo'=>'man.jpg',
        'cover_photo'=>'tumblr-image-sizes-banner.png',
        'slogan'=>'learn-earn and grow',
        'description'=>$this->faker->text()
        ];
    }
}
