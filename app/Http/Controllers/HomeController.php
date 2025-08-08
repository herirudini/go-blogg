<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // Query for categories
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('pages.home', ['categories' => $categories]);
    }
}
