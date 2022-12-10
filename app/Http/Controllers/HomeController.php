<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show(Request $request)
    {


        Product::where('id', '=', 1)->delete();
        return 'Successfully Updated!';
    }

    public function insertOperation()
    {
        DB::table(table: 'products')->insert([
            'id' => 1,
            'name' => 'table',
            'quantity' => 100,
            'price' => 500
        ]);

        return 'Insert Successfully';
    }
}
