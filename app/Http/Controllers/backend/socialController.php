<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use Laravel\Socialite\Facades\Socialite;
use Nette\Utils\Random;

use function PHPSTORM_META\map;

class socialController extends Controller
{

      // Login with google//

      public function google_login(){

        return Socialite::driver('google')->redirect();
  
    }

//Redirect with user information url//
    public function google_redirect(){

        $user = Socialite::driver('google')->stateless()->user();

        $newUser = User::updateOrCreate([
            'email' => $user->email,
        ], [
            'name' => $user->name,
            'email' => $user->email,
            'password' => Hash::make(uniqid()),
        ]);

        Auth::login($newUser);
     
        $newUser_email = $newUser->email;
        $user_info = User::where('email',$newUser_email)->with('roles')->get();
   
        if(count($user_info->first()->roles) <= 0){

            $newUser->assignRole('subs');
        }

        $user_info = User::where('email',$newUser_email)->with('roles')->get();
        $user_role =  $user_info->first()->roles['0']->name;

        if($user_role == 'subs'){

            return redirect('http://localhost:8000/');

        }else{

            return redirect('http://localhost:8000/deshboard');

        }
     

           }



    //Facebook Login///

    public function facebook_login(){
      
            return Socialite::driver('facebook')->redirect();

    }

    //Facebook redirect ur//

    public function facebook_redirect(){

        $user = Socialite::driver('facebook')->stateless()->user();


        $newUser = User::updateOrCreate([
            'email' => $user->email,
        ], [
            'name' => $user->name,
            'email' => $user->email,
            'password' => Hash::make(uniqid()),
        ]);

        Auth::login($newUser);
     
        $newUser_email = $newUser->email;
        $user_info = User::where('email',$newUser_email)->with('roles')->get();
   
        if(count($user_info->first()->roles) <= 0){

            $newUser->assignRole('subs');
        }

        $user_info = User::where('email',$newUser_email)->with('roles')->get();
        $user_role =  $user_info->first()->roles['0']->name;

        if($user_role == 'subs'){

            return redirect('http://localhost:8000/');

        }else{

            return redirect('http://localhost:8000/deshboard');

        }
    } 



    //Github Login//

    public function github_login(){

        return Socialite::driver('github')->redirect();

    }  


    //Github redirect 

    public function github_redirect(){

        $user = Socialite::driver('github')->stateless()->user();

        $newUser = User::updateOrCreate([
            'email' => $user->email,
        ], [
            'name' => $user->nickname,
            'email' => $user->email,
            'password' => Hash::make(uniqid()),
        ]);

        Auth::login($newUser);
     
        $newUser_email = $newUser->email;
        $user_info = User::where('email',$newUser_email)->with('roles')->get();
   
        if(count($user_info->first()->roles) <= 0){

            $newUser->assignRole('subs');
        }

        $user_info = User::where('email',$newUser_email)->with('roles')->get();
        $user_role =  $user_info->first()->roles['0']->name;

        if($user_role == 'subs'){

            return redirect('http://localhost:8000/');

        }else{

            return redirect('http://localhost:8000/deshboard');

        }
    }

}