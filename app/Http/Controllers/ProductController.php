<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductVariantPrice;
use App\Models\Variant;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::orderby('id','asc')->get();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $variants = Variant::all();
        return view('products.create', compact('variants'));
    }

    public function dropzone(){
        return view('product');
    }

    public function dropzonestore(Request $request){
        $image = $request->file('file');
        $imgCustomName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images').$imgCustomName);
        //$location = public_path('images'.$imgCustomName);
        //Image::make($image)->save($location);
        // $dropzoneStore->image = $imgCustomName;
        // $dropzoneStore->save();
        // return redirect()->route('subcategorymanage');
        return response()->json(['success'=>$imgCustomName]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $all)
    {
        $all->validate([
            'title' => 'required',
            'sku' => 'required',
            'description' => 'required',

        ]);
        $data = $all->all();
        print_r($data);

        $product = new Product();
        $product->title = $all->title;
        $product->sku = $all->sku;
        $product->description = $all->description;
        $product->save();
        return redirect()->route('index');
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $variants = Variant::all();
        return view('products.edit', compact('variants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $all, $id)
    {
        $product = Product::find($id);
        $product->title = $all->title;
        $product->sku = $all->sku;
        $product->description = $all->description;
        $product->update();
        return redirect()->route('manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
