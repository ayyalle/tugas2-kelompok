<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        return view('foods');
    }

    public function home()
    {
        return view('home');
    }

    public function restoran()
    {
        return view('restoran');
    }

    public function pesanan()
    {
        return view('pesanan');
    }
}