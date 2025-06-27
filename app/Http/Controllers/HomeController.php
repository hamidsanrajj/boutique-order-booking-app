<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class HomeController extends Controller
{

    public function index()
    {
        $rs = DB::table('dress_collections')->orderBy('id', 'ASC')->get();
        return view('index',compact('rs')); 
    }

}
