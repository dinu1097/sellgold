<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Users extends Controller
{
    public function login()
    {

    }
    public function register()
    {

    }
    public function wallet()
    {

    }
    public function orders($id)
    {
        $orders = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->where('users.id','=',$id)
        ->select('*','orders.id as order_id','users.id as user_id')
        ->get();

        return view('Admin.user_info', ['orders' => $orders]);
    }
    public function index()
    {
        $users = DB::table('users')->get();

        return view('Admin.users',['users' => $users]);
    }
    
}
