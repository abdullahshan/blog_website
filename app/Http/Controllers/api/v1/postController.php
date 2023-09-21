<?php

namespace App\Http\Controllers\api\v1;

use PDO;
use App\Models\post;
use App\Models\User;
use Spatie\Tags\Tag;
use Nette\Utils\Random;
use App\Models\Category;
use App\Models\subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Login;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class postController extends Controller
{
    public function allcategory($id = null){


        if($id){

            $posts = post::where('id',$id)->get();
        }else{

            $posts = post::get();
        }
      

       return response($posts);
    }

    public function add(){


        $categries = Category:: latest()->get();
        $sub_categories = subcategory:: latest()->get();

        return view('backend.post.apipost',compact('categries','sub_categories'));

      
       
    }

    public function logout(){

           
            return response(auth('sanctum')->user()->currentAccessToken()->delete());
    }


    public function product_store(){


        return "hellow";
        
    }



    public function register(Request $request){


        $user = User::create([
            'name' => $request->name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


       Auth::login($user);

       $token = $request->user()->createToken($request->name);

       $data = ([

                'user' => $user,
               'token' => $token,
       ]);

       return response($data, 201);

    }



    //post insert image part//

    private function project_image($request){

        if($request->hasFile('image')){
            $project_image = $request->file('image')->extension();
    
            $filename = $this->getslug($request->title) . '.' . $project_image;
    
         $image =   $request->image->storeAs('upload/',$filename, 'public');
    
                return $image;
         }
    }



     //slug insert part//

     private function getslug($title, $slug = null){

        if($slug == null){

            $newslug = $title;

        }else{

            $newslug = $slug;
        }

        $count = post:: where('slug', 'LIKE' , '%' . $newslug . '%')->count();

       if($count > 0){

                $unicqslug = $newslug . $count++;    
                return $unicqslug;
       }else{

            return $newslug;
       }

      
}

}
