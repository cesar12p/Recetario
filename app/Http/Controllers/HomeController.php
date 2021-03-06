<?php

namespace App\Http\Controllers;
use App\User;
use App\recipe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Images;
use Image;
use DB;
use App\Http\Resources\ReciperResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    
    public function getApi()
    {
       
        
    
        return new ReciperResource(recipe::where('id',1)->first());
    }
        

    public function index()
    {
        $id = Auth::id();
        $recipes = recipe::where('user_id','=',$id)->get();
        return view('home',['recipes'=>$recipes]);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|max:2048|mimes:jpg,jpeg,bmp,png',
            'ingredients' => 'required|string|max:2000',
            'instructions' => 'required|string|max:2000',
           ]);
        $id = Auth::id();
        $image_file = $request->image;
        $image = Image::make($image_file);
        Response::make($image->encode('jpeg'));
        recipe::create([
            'user_id'=>$id,
            'title'=>$request->title,
            'ingredients'=>$request->ingredients,
            'instructions'=>$request->instructions,
            'image'=>$image
        ]);
        
        $recipes = recipe::where('user_id','=',$id)->get();
        

        return redirect()->route('home');

    }

    function fetch_image($image_id)
    {
        
        $image = recipe::findOrFail($image_id);

        $image_file = Image::make($image->image);
        
        $response = Response::make($image_file->encode('jpeg'));
        
        $response->header('Content-Type', 'image/jpeg');
        
        return $response;
    }
    public function showRecipe(Request $request){
        $idRecipe = $request->id;
        $ShowMeThisRecipe = recipe::where('id','=',$idRecipe)->get();
        return view('watchRecipe',['Recipes'=>$ShowMeThisRecipe]);
    }

    public function editRecipe(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'image|max:2048|mimes:jpg,jpeg,bmp,png',
            'ingredients' => 'required|string|max:2000',
            'instructions' => 'required|string|max:2000',
           ]);
        if($request->image==null){
            recipe::where('id', $request->idRecipe)
            ->update([
                    'title' => $request->title,
                    'ingredients'=>$request->ingredients,
                    'instructions'=>$request->instructions,
                    ]);
        }else{
            $image_file = $request->image;
            $image = Image::make($image_file);
            Response::make($image->encode('jpeg'));
            recipe::where('id', $request->idRecipe)
            ->update([
                    'title' => $request->title,
                    'ingredients'=>$request->ingredients,
                    'instructions'=>$request->instructions,
                    'image'=>$image
                    ]);
        }
        return redirect()->route('home');
    }

    public function destroy($id){
        

       // $receta = recipe::delete($id);
       DB::table('recipes')->delete($id);
        
        return redirect()->route('home');
        

    }


   

}
