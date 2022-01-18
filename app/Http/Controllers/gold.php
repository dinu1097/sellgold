<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Wallet;
use DB;
class gold extends Controller
{
    public function buy(Request $request)
    {
        $grams = $request->session()->get('grams');
        if($grams != 0)
        {
            $amount = $grams* 4353.09;  
            $Orders = new Orders;
            $Orders->user_id = $request->session()->get('user_id');
            $Orders->amount = $amount;
            $Orders->grams = $grams;
            $Orders->buysell = 'buy';
            $Orders->status = 'delivered';
            $Orders->save();

            $wallet = Wallet::where('user_id','=',$request->session()->get('user_id'))->firstOrFail();
            $wallet->amount = $wallet->amount + $amount;
            $wallet->save();


        }
        $amount = $request->session()->get('amount');
        if(isset($amount))
        {
            $grams = $amount / 4353.09; 
            $Orders = new Orders;
            $Orders->user_id = $request->session()->get('user_id');
            $Orders->amount = $amount;
            $Orders->grams = $grams;
            $Orders->buysell = 'buy';
            $Orders->status = 'delivered';
            $Orders->save(); 

            $wallet = Wallet::where('user_id','=',$request->session()->get('user_id'))->firstOrFail();
            $wallet->amount = $wallet->amount + $amount;
            $wallet->save();
        }

        dd('succcess');
    }
    public function buystoresession(Request $request)
    {
        if(isset($request->grams))
        {

            session(['grams' => $request->grams]);
        }
        if(isset($request->amount))
        {
            $amount = $request->amount;
            session(['amount' => $request->amount]);
        }

        return view('checkout',['amount' => $amount]);
    }
    public function sell(Request $request)
    {


        $grams = $request->grams;
        if($grams != 0)
        {
            $wallet = Wallet::where('user_id','=',$request->session()->get('user_id'))->firstOrFail();
            if($wallet->grams > $grams)
            {
                $wallet->grams = $wallet->grams - $grams;
                $wallet->save();
            }
            else
            {
                dd('insufficient balance');
            }

            $amount = $grams* 4353.09;  
            $Orders = new Orders;
            $Orders->user_id = $request->session()->get('user_id');
            $Orders->amount = $amount;
            $Orders->grams = $grams;
            $Orders->buysell = 'sell';
            $Orders->status = 'delivery pending';
            $Orders->save();



        }
        $amount = $request->amount;
        if(isset($amount))
        {
            $wallet = Wallet::where('user_id','=',$request->session()->get('user_id'))->firstOrFail();
            if($wallet->amount > $amount)
            {
                $wallet->amount = $wallet->amount - $amount;
                $wallet->save();
            }
            else
            {
                dd('insufficient balance');
            }


            $grams = $amount / 4353.09; 
            $Orders = new Orders;
            $Orders->user_id = $request->session()->get('user_id');
            $Orders->amount = $amount;
            $Orders->grams = $grams;
            $Orders->buysell = 'sell';
            $Orders->status = 'deliverey pending';
            $Orders->save(); 


        }

        dd('succcess');
     }

}
