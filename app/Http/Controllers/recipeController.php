<?php

namespace App\Http\Controllers;
use App\User;
use App\recipe;
use Illuminate\Http\Request;

class recipeController extends Controller
{
    public function index(){
        $recipes = recipe::latest()->get();
        return view('welcome',['recipes'=>$recipes]);
    }
}
