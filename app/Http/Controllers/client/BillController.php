<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\orderDetail;
use Illuminate\Http\Request;

class BillController extends Controller
{

    public function getBill(Request $request)
    {
        $bill = orderDetail::select('order_id')->groupby('order_id')->distinct()->get();
//        dd($bill);
//        $bill = orderDetail::select("orderDetail.order_id")->join("orders", "orders.id", "=", "orderDetail.order_id")->distinct()->get();
//        $bill = orderDetail::distinct()
//            ->select('order_details.order_id')->groupby('order_details.order_id')
//            ->join('orders', 'order_details.order_id', '=', 'orders.id')
//            ->where('orders.user_id', '=', auth()->id())
////            ->groupby('order_id')
//            ->pluck('order_details.order_id');
//        dd($bill);
        return view('client.bills.bill', compact('bill'));
    }

    public function billProduct($id)
    {
        $bill = OrderDetail::where('order_id', $id)->get();
//        dd($bill);
        return view('client.bills.productBill', compact('bill'));
    }


}
