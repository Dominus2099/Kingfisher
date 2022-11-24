<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class CompileController extends Controller
{

    public function index(){

        
        $articledash = Article::where('status', '1')->latest()->paginate(4);
        $articleimg = Article::where('status', '1')->latest()->paginate(1);

        return view('admin.compile',['articledash' => $articledash], compact( 'articledash', 'articleimg'));
    }

    //public function store(Request $request)
    //{
       // $title = $request->input('title');
      //  $ = $request->input('last_name');
      //  $city_name = $request->input('city_name');
    //}
}
