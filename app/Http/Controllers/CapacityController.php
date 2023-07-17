<?php

namespace App\Http\Controllers;

use App\Http\Requests\CapacityRequest;
use App\Http\Requests\UpdateCapacityRequest;
use App\Models\Capacities;
use Illuminate\Http\Request;

class CapacityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Capacities::all();
        return view('admin.capacities.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.capacities.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CapacityRequest $request)
    {
        Capacities::query()->create($request->all());
        return redirect()->route('admin.capacity.home');
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
        $data = Capacities::query()->findOrFail($id);
        return view('admin.capacities.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCapacityRequest $request, string $id)
    {
        $model = Capacities::query()->findOrFail($id);
        $model->fill($request->all());
        $model->save();
        return redirect()->route('admin.capacity.home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Capacities::query()->findOrFail($id)->delete();
        return redirect()->route('admin.capcity.home');
    }
}
