<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\orderDetail;
use App\Models\orders;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function form($id)
    {
        $data = Cart::query()->where('user_id', $id)->get();
        return view('client.checkout.checkout', compact('data'));
    }
    public function submit_form(Request $request)
    {
        dd($request->all());
        $data = [
            "order_name" => $request->order_name,
            "order_address" => $request->order_address,
            "order_phone" => $request->order_phone,
            "order_PTTT" => $request->check,
            "order_status" => "0",
            "user_id" => $request->user_id,
        ];
        $order = orders::create($data);
        $cart = [
            "order_id"=> $order->id,
            "cart_id" => $request->cart_id,
            "sum_price" => $request->sum_price,
            "sum_quantity" => $request->sum_quantity
        ];
        orderDetail::create($cart);
        return "Thành công";
    }
}