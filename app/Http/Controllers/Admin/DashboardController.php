<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
<<<<<<< Updated upstream
        return view('admin.dashboard');
=======

        $users = User::where('status', '1')->count();
        $articles = Article::count();
        $categories = Category::count();
        $comments = Comment::count();
        $articleviews = Article::sum('view_count');
        $notifications = auth()->user()->unreadNotifications;
        $articledash = Article::where('status', '1')->latest()->paginate(3);

        return view('admin.dashboard',['articledash' => $articledash], compact('users', 'articles', 'categories', 'comments', 'articleviews', 'notifications', 'articledash'));
>>>>>>> Stashed changes
    }

    //public function store(Request $request)
    //{
       // $title = $request->input('title');
      //  $ = $request->input('last_name');
      //  $city_name = $request->input('city_name');
    //}
}
