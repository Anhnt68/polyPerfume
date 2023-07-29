<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use App\Models\User;
use App\Models\Orders;


class AdminController extends Controller
{
    public function index()
    {
        $allCate = Categories::count();
        $allProduct = Products::count();
        $allUser = User::count();
        $allOrder = Orders::count();

        return view('admin.home', compact('allCate', 'allProduct', 'allUser', 'allOrder'));
    }
}
