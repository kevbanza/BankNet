<?php

 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
session_start();
class AccountController extends Controller
{
    public function deposit(Request $request){ //deposit section
        $amount=0;
        $oldamount= DB::table('persons')
                ->select('amount')
                ->where('id',$_SESSION['id'])
                ->get();
        foreach($oldamount as $old){
            $amount=$old->amount;
        }
        if($amount<0){
            $amount=$amount+($request->amount*0.98);
            echo "your solde was under 0   2 % of your deposit amount has been taken";
        }
        else{
            $amount=$amount+$request->amount;
        }

        $affected = DB::table('persons')
              ->where('id', 1)
              ->update(['amount' => $amount]);

        return view('master')->with('amount', $amount)->
        with('thename', $_SESSION['name']);;
    }

    public function withdraw(Request $request){ //withdraw section
        $amount =0;
        if($request->amount == 500){
            $amount =0;
            $oldamount= DB::table('persons')
                ->select('amount')
                ->where('id',$_SESSION['id'])
                ->get();
            foreach($oldamount as $old){
                $amount=$old->amount;
            }
            $finalamount=$amount-500;
            if($finalamount<-500){
                echo "You cannot go under -500 $";
            }
            else{
                $affected = DB::table('persons')
                    ->where('id', 1)
                    ->update(['amount' => $finalamount]);
                $amount=$finalamount;
                echo "500 $ has been withdrawn from your account";
            }
        }else{
            echo 'ERROR:: You Can only withdraw 500$ at once.';
            return view('withdraw');
        }
        return view('master')->with('amount', $amount)->
        with('thename', $_SESSION['name']);
    }


}
