<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\orderDetail;
use App\Models\orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function form($id)
    {
        $data = Cart::query()->where('user_id', $id)->get();
        return view('client.checkout.checkout', compact('data'));
    }

    public function submit_form(Request $request)
    {
        $request['order_status'] = 0;
        $request['user_id'] = auth()->id();
        $request['order_PTTT'] = $request['order_PTTT'] ?? '0';

        $order = orders::query()->create($request->all());

        $carts = Cart::query()->where('user_id', auth()->id())->get();

        foreach ($carts as $item) {
            $productPrice = $item->Stock->price;
            $quantity = $item->quantity;
            $sumPrice = $productPrice * $quantity;
            $cart = [
                "order_id" => $order->id,
                "stock_id" => $item->stock_id,
                "product_id" => $item->product_id,
                "sum_price" => $sumPrice,
                "sum_quantity" => $quantity
            ];
            orderDetail::query()->create($cart);
        }
        $auth = auth()->user();
        Mail::send('client.emails.sendemail', compact('order', 'auth'), function ($email) use ($auth, $request) {
            $email->subject('Shopping');
            $email->to($request['order_email'], $auth->name);
        });

        Cart::where('user_id', $request->user_id)->delete();
        return "Thành công";

    }
}