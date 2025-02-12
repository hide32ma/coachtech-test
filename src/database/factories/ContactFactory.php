<?php

namespace Database\Factories;

// contactモデルを使用
use App\Models\Contact;

// categoryモデルを使用
use App\Models\Category;



use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Contact::class;


    public function definition()
    {
        return [
            //'category_id' => Category::inRandomOrder()->id,

            'category_id' => Category::query()->inRandomOrder()->value('id') ?? Category::factory()->create()->id,

            //'category_id' => Category::factory()->create()->id,

            'first_name' => $this->faker->firstname(),

            'last_name' => $this->faker->lastname(),

            'gender' => $this->faker->randomElement([1, 2, 3]),

            'email' => $this->faker->unique()->safeEmail(),

            'tel' => $this->faker->phoneNumber(),

            'address' => $this->faker->address(),

            'building' => $this->faker->secondaryAddress(),

            'detail' => $this->faker->realText(),

        ];
    }
}
