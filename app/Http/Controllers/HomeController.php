<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show(Request $request)
    {
        $products = Product::all();
        dd($products);
        // $userid = $request->userid;
        // $age = $request->age;
        // $userName = request('username');
        // $products = array('table', 'chair', 'stool');
        // return view('homepage', compact('userid', 'age', 'userName', 'products'));
    }
}
