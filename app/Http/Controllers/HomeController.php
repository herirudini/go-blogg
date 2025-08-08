<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use App\Models\Category;

class HomeController extends Controller
{
    // Query for categories
    public function index()
    {
        // $categories = DB::table('categories')->get();
        // return view('pages.home', ['categories' => $categories]);
        $categories = Category::all(); 
        return view('pages.home', ['categories' => $categories]);
    }
}
