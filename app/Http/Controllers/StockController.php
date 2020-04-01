<?php

namespace App\Http\Controllers;
use App\Http\Resources\Stock\StockResource;
use App\Http\Resources\Stock\StockCollection;
use App\Http\Requests\StockRequest;
use App\Model\Stock;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return Stock::all();
        return StockCollection::collection(Stock::all());
        // return new StockCollection(Stock::all());

        // return StockResource::collection(Stock::all());

    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StockRequest $request)
    {
        //
        $stock = new Stock;

        $stock->name = $request->name;
        $stock->address = $request->address;
        $stock->description = $request->description;
        $stock->save();
        return response([ 'data'=> new StockResource($stock)],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
        // return $stock;
        return new StockResource($stock);
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
        $stock->update($request->all());
        return $stock;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
        // $stock->delete();
        // return response(null,Response::HTTP_NO_CONTENT);

    }
}
