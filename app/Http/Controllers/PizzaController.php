<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {
        
        $title = 'Pizzas';

        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'cheesy crust'],
            ['type' => 'volcano', 'base' => 'garlic crust'],
            ['type' => 'veg supreme', 'base' => 'thin & crispy'],
        ];

        return view('pizzas', [
            'title' => $title,
            'pizzas' => $pizzas,
            'name' => request('name'),
            'age' => request('age')
        ]);
    }

    public function show($id){
        
        $title = "Pizza $id";

        return view('details', [
            'title' => $title,
            'id' => $id
        ]);
    }
}
