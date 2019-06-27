<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;

class DashboardController extends Controller
{
    public function index(){

        $ingredients = Ingredient::all()->count();

        return view('dashboard', compact('ingredients'));
    }
}
