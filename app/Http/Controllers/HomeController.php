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
        // DB::table(table: 'products')->insert([
        //     'id' => 1,
        //     'name' => 'table',
        //     'quantity' => 100,
        //     'price' => 500
        // ]);

        DB::insert('Insert into products(id,name,quantity,price) values(?,?,?,?)', [6, 'table', 250, 400]);

        return 'Insertion Complete!';
    }

    public function readOperation()
    {

        //DB::table('products')->select('name', 'price', 'quantity')->where('id','=',6)->get();
        //$product = DB::table('products')->select('name', 'price', 'quantity')->where('id', '=', 6)->get();
        $product = DB::select('select name, price, quantity from products where id = 6');
        return $product;
    }
}
