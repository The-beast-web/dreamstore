<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('website.shop.index');
    }

    public function detail()
    {
        return view('website.shop.detail');
    }


}
