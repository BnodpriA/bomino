<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $toppingChoices = [
            'Extra Cheese',
            'Pepperoni',
            'Mushrooms',
            'Onions',
            'Sausage',
            'Green Peppers',
            'Black Olives',
            'Bacon',
            'Ham',
            'Pineapple',
            'Spinach',
            'Tomatoes',
            'Jalapeños',
            'Chicken',
            'Ground Beef',
            'Feta Cheese',
        ];

        $toppings = [];

        for ($i=0; $i <= rand(1,5); $i++) { 
            $toppings[] = Arr::random($toppingChoices);
        }

        $toppings = array_unique($toppings);
        
        return [
            'user_id' => rand(11,10),
            'size' => Arr::random(['Small','Medium', 'Large', 'Extra-Large']),
            'crust' => Arr::random(['Normal','Thin','Hand-tossed','Pan','Stuffed crust','Garlic']),
            'toppings' => $toppings,
            'status' => Arr::random(['Ordered', 'Preparing', 'Baking', 'Cooking', 'Ready for pickup', 'Delivered']),
        ];
    }
}
