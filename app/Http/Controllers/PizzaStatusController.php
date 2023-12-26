<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaStatusController extends Controller
{
    public function updateStatus(Request $request, Pizza $pizza)
    {
        $pizza->update([
            'status' => $request->status
        ]);
    }
}
