<?php

namespace App\Http\Controllers;
use App\Http\Resources\ProductResource;
use App\Model\Product;
use App\Model\Stock;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Stock $stocks)
    {
        //
        return ProductResource::collection($stocks->products);
        // return Product::all();
        // return ProductResource::collection(Product::all());

    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request, Stock $stock)
    {
        //
        $product = new Product;
        $product->name = $request->name;
        $product->unit_price = $request->unit_price;
        $product->pur_price = $request->pur_price;
        $product->model = $request->model;
        $product->description = $request->description;
        $product->expire = $request->expire;
        $product->production = $request->production;
        $product->qty = $request->qty;
        $product->unitinstock = $request->unitinstock;
        $product->min_qty = $request->min_qty;
        $product->max_qty = $request->max_qty;
        $product->stock_id = $request->stock_id;
        $product->save();
        // $stock->products()->save($product);
        return response([
                'data'=>new ProductResource($product)],Response::HTTP_CREATED);

        // $product=new Product($request->all());
        // $stock->products()->save($product);
        // return response([
        //     'data'=>new ProductResource($product)],Response::HTTP_CREATED);
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show( Product $id)
    {
        //

    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock, Product $product )
    {
        
        return  $stock;
        // return  $stock->products();
        // $product->update($request->all());
        // return response([
        //     'data' => new ProductResource($product)
        // ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
