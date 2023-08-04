<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Categories;
use App\Models\orderDetail;
use App\Models\orders;
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
        return view('admin.bills.bill', compact('bill'));
    }

    public function billProduct($id)
    {
        $bill = OrderDetail::where('order_id', $id)->get();
//        dd($bill);
        return view('admin.bills.productBill', compact('bill'));
    }

    public function edit(string $id)
    {
        $data = orders::query()->findOrFail($id);
        return view('admin.bills.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        dd($request['order_status']);
//        dd(1);
        $data  = [
            'order_status'=>$request['order_status']
        ];
        $model = orders::query()->findOrFail($id);

        $model->fill($data);

        $model->save();

        return redirect()->route('admin.bill.bill');
    }
}
