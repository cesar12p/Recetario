<?php

namespace App\Http\Controllers;
use App\User;
use App\recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Images;
use Image;
use DB;

class recipeController extends Controller
{
    public function index(){
        $recipes = recipe::latest()->get();
        return view('welcome',['recipes'=>$recipes]);
    }
    
    function fetch_image($image_id)
    {
        
        $image = recipe::findOrFail($image_id);

        $image_file = Image::make($image->image);
        
        $response = Response::make($image_file->encode('jpeg'));
        
        $response->header('Content-Type', 'image/jpeg');
        
        return $response;
    }

    public function see($id){
        
       $recipe = recipe::where('id','=',$id)->first();

       

        return view('seeRecipe', compact('recipe'));
    }
}
