<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Codexshaper\WooCommerce\Facades\WooCommerce;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }
}
