<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DressCollection;

class DressCollectionController extends Controller
{
    //

    public function index()
    {
        return view('/include/views/addDressCollection/addDressCollection');
    }

    public function store(Request $request)
    {
        // if($request->file('img')){
        //     $file= $request->file('img');
        //     $filename= $file->getClientOriginalName();
        //     $file-> move(public_path('../assets/img/uploads'), $filename);
        // }

        $img = $request->input('img');
        $name = $request->input('name');
        $price = $request->input('price');
        $rating = $request->input('rating');

        DressCollection::create([
            'img' => $img,
            'name' => $name,
            'price' => $price,
            'rating' => $rating,
        ]);

        return view('/include/views/addDressCollection/addDressCollection');
    }


    public function detail_index(Request $request)
    {
        $id = $request->input('id');
        $rs = DB::table('dress_collections')->where('id','=',$id)->get();
        return view('include/views/detail',compact('rs')); 
    }

    // public function detail(Request $request)
    // {
    //     $id = $request->input('id');
    //     $rs = DB::table('dress_collections')->select('*')->where('id','=','%'.$id.'%')->get();
    //     return view('include/views/detail',compact('rs')); 
    // }

}
