<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('website.category.index');
    }

    public function detail()
    {
         return view('website.category.detail');
    }

    public function single_product()
    {
        return view('website.category.single-product');
    }
}
