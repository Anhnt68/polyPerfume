<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Products::orderBy('created_at', 'DESC')->get();
        return view('admin.products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $allCate = Categories::all();
        return view('admin.products.add', compact('allCate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        if ($request->has('product_image')) {
            $file = $request->product_image;
            $ext = $request->product_image->extension();
            $file_name = $request->getSchemeAndHttpHost() . '/' . 'Uploads/' . time() . '-' . 'image.' . $ext;
            $file->move(public_path('Uploads'), $file_name);
        }
        // dd($file_name);
        $request->merge(['image' => $file_name]);
        $request['image'] = $file_name;
        Products::create($request->all());
        return redirect()->route('admin.product.home');
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
        $allCate = Categories::all();
        $data = Products::find($id);
        return view('admin.products.edit', compact('data', 'allCate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->has('product_image')) {
            $file = $request->product_image;
            $ext = $request->product_image->extension();
            $file_name = $request->getSchemeAndHttpHost() . '/' . 'Uploads/' . time() . '-' . 'image.' . $ext;
            $file->move(public_path('Uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        $request['image'] = $file_name;
        $model = Products::query()->findOrFail($id);
        $model->fill($request->all());
        $model->save();

        return redirect()->route('admin.product.home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Products::query()->findOrFail($id)->delete();
        return redirect()->route('admin.product.home');
    }
}
