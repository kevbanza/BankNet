<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function register(Request $request){

        DB::table('persons')->upsert([
            ['name' => $request->title, 'password' => $request->content, 'amount' => 0.00],
            ], ['name', 'password']);
        //$message->save();

        return redirect('/');
    }



    public function login(Request $request){

        $name=$request->title;
        $pass=$request->content;
        $user = DB::table('persons')->where('name', $name)->where('password', $pass)->first();

       // return $user->id;
        if(isset($user->id)){
            session_start();
            $_SESSION['name']=$name;
            $_SESSION['id']=$user->id;
            return view('master')->with('amount', $user->amount)->
            with('thename', $_SESSION['name']);
        }
        else{
            return redirect('/registerPage');
        }
        
    }

    public function logout(){
        session_start();
        session_destroy();
        return redirect('/');
    }
}
