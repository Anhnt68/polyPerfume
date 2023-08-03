<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function form($id){
        $data = Cart::query()->where('user_id', $id)->get();
        return view('client.checkout.checkout', compact('data'));
    }
    public function submit_form(Request $request){
        dd($request->all());
    }
}
