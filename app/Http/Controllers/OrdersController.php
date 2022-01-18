<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use DB;
class OrdersController extends Controller
{
    public function Read()
    {
        $orders = DB::table('orders')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->select('*','orders.id as order_id')
            ->get();

        return view('Admin.order_pending', ['orders' => $orders]);
    }
    public function delete($id)
    {
        DB::table('users')->delete($id);
        return redirect()->back();
    }
}
