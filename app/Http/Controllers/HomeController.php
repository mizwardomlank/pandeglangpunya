<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // for ($i=0; $i < 30; $i++) { 
        //     $products[] = factory(Product::class)->make();
        // }

        $products = Product::where('status', 'approved')->orderBy('id', 'desc')->paginate(10);;
        
        $categories = Category::where('status', 'approved')->get();

        return view('landing', ['categories' => $categories, 'products' => $products]);
    }
}
