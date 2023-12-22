<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PizzaOrderController extends Controller
{
    public function showPizza(Pizza $pizza) : Response
    {
        return Inertia::render('Pizzas/Show', [
            'pizza' => $pizza
        ]);
    }
}
