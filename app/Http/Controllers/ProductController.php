<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Auth;
use Str;
use Validator;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status', 'approved')->get();

        return view('product.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($data['name']);
        $data['status'] = "approved";
        // $data['image'] = "http://lorempixel.com/200/200";

        // image
        $rules = [
            'name'        => 'required|unique:products|max:144',
            'image'       => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|max:344',
            'category_id' => 'required',
            'phone'       => 'required',
        ];

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect('products/create')
                        ->withErrors($validator)
                        ->withInput();
        }


        $image = $request->file('image');
        $input['imagename'] = time().Str::random(10).'.'.$image->getClientOriginalExtension();
        $path = $request->image->storeAs('public/images', $input['imagename']);
        
        // front path
        $data['image'] = 'storage/images/'.$input['imagename'];

        $product = Product::create($data);

        return redirect('/')->with(['success' => 'Karyamu berhasil ditambahkan. Jika kamu merasa ini bermanfaat, ayo bagikan!']);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
