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
        // $readOperation= Product::all();
        $readOperation = Product::select('name','quantity','price')->where('id','=' ,1)->first();
        //dd($readOperation);
        return $readOperation;
    }
}
