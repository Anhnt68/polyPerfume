<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Categories::all();
        return view('admin.categories.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        if ($request->has('cate_image')) {
            $file = $request->cate_image;
            $ext = $request->cate_image->extension();
            $file_name = $request->getSchemeAndHttpHost() . '/' . 'Uploads/' . time() . '-' . 'image.' . $ext;
            $file->move(public_path('Uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        $request['image'] = $file_name;
        Categories::query()->create($request->all());
        return redirect()->route('admin.category.home');
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
        $data = Categories::query()->findOrFail($id);
        return view('admin.categories.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        if ($request->has('cate_image')) {
            $file = $request->cate_image;
            $ext = $request->cate_image->extension();
            $file_name = $request->getSchemeAndHttpHost() . '/' . 'Uploads/' . time() . '-' . 'image.' . $ext;
            $file->move(public_path('Uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        $request['image'] = $file_name;
        $model = Categories::query()->findOrFail($id);

        $model->fill($request->all());

        $model->save();

        return redirect()->route('admin.category.home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Categories::query()->findOrFail($id)->delete();
        return redirect()->route('admin.category.home');
    }
}
