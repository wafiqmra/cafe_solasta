<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pastries;

class PastriesController extends Controller
{
    public function index()
    {
        $pastries = Pastries::all();
        return view('home.pastries', compact('pastries'));
    }
}
