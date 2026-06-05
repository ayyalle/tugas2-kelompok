<?php

namespace App\Http\Controllers;

class FoodController extends Controller
{
    public function index()
    {
        return view('foods');
    }
}