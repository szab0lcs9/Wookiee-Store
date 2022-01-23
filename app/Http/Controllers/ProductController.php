<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Product::class, 'product');
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
        $category_options = Category::orderBy('name')->get();

        return view('product.create')->with([
            'category_options' => $category_options
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $authUser = User::first();

        $product = $authUser->products()->create($request->except(['_token']));

        if ($request->file('image')) {

            $image = $request->file('image');
            $destination = 'public';
            $name = $image->getClientOriginalName();
    
            Storage::putFileAs($destination, $image, $name);

            $product['image'] = $name;
        }

        return redirect()->route('product.show', $product)->with('success', __('Product created successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $user = User::first();

        return view('product.show')->with(compact('product', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $category_options = Category::orderBy('name')->get();

        return view('product.edit')->with(compact('product', 'category_options'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('product.edit', $product)->with('success', __('Product updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.my_products', $product)->with('success', __('Product deleted successfully'));
    }

    public function showAll()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(8);

        return view('product.total')->with(compact('products'));
    }
}
