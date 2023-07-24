<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockRequest;
use App\Http\Requests\UpdateStockRequest;
use App\Models\Capacities;
use App\Models\Products;
use App\Models\Stocks;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Stocks::orderBy('created_at', 'DESC')->get();
        return view('admin.stocks.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $allCapacity = Capacities::all();
        $allProduct = Products::all();

        return view('admin.stocks.add', compact('allCapacity', 'allProduct'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StockRequest $request)
    {
        Stocks::create($request->all());
        return redirect()->route('admin.stocks.home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $allCapacity = Capacities::all();
        $allProduct = Products::all();
        $data = Stocks::find($id);
        return view('admin.stocks.edit', compact('allCapacity', 'allProduct', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStockRequest $request, string $id)
    {
        $model = Stocks::query()->findOrFail($id);
        $model->fill($request->all());
        $model->save();

        return redirect()->route('admin.stocks.home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Stocks::query()->findOrFail($id)->delete();
        return redirect()->route('admin.stocks.home');
    }
}
