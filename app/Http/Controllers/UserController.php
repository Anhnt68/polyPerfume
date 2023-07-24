<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::orderBy('created_at', 'DESC')->get();
        return view('admin.users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        User::query()->create($request->all());
        return redirect()->route('admin.user.home');
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
        $data = User::query()->findOrFail($id);
        return view('admin.users.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        $model = User::query()->findOrFail($id);
        $model->fill($request->all());
        $model->save();
        return redirect()->route('admin.user.home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::query()->findOrFail($id)->delete();
        return redirect()->route('admin.user.home');
    }
}
