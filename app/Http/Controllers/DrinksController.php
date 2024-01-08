<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drinks;
class DrinksController extends Controller
{
    public function index()
    {
        $drinks = Drinks::all();
        return view('home.drinks', compact('drinks'));
    }
}
