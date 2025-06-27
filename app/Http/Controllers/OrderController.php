<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class OrderController extends Controller
{
    //

    public function index(Request $request)
    {
        $id = $request->input('id');
        $rs = DB::table('dress_collections')->where('id','=',$id)->get();
        return view('include/views/buy/buy',compact('rs')); 
    }

    public function buy(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $city = $request->input('city');
        $location = $request->input('location');

        $img = $request->input('img');
        $dress_name = $request->input('dress_name');
        $price = $request->input('price');

        Order::create([
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'city' => $city,
            'location' => $location,
            'img' => $img,
            'dress' => $dress_name,
            'price' => $price,
        ]);

        $rs = DB::table('dress_collections')->orderBy('id', 'ASC')->get();
        return view('index',compact('rs'));
    }

}
