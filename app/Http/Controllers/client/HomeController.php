<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Stocks;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Products::query()->latest()->get();
//        dd($data);
        return view('client.blocks.main', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function productDetail($id)
    {
//        dd($id);

        $product = Products::where('products.id', $id)
            ->get();
//        $capacity =

        return view('client.products.details', compact('product'));

    }

    public function getProductPrice(Request $request)
    {
        if ($request['id']) {
            $data = Stocks::query()->find($request['id']);
        }

        return response()->json([
            'code' =>200,
            'data' => [
                'price' => $data->price ?? 0
            ]
        ]);
    }

    public function test() {

    }
}
