<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Store;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("products.index",["products"=>Products::all()]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store_id = Store::where("store_name", $request->input("store_name"));

        Products::create([
            "title"=>$request->input("title"),
            "image"=>$request->input("img"),
            "description"=>$request->input("desc"),
            "store_id"=>$store_id
        ]);

        return redirect()->route("adminindex");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Products::where("id",$id)->firstOrFail();
        //$comments = Comments::where("product_id",$id)->get();
        return view("products.show",[
            "product"=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Products::where("id",$id)->firstOrFail();
        return view("products.edit",["product"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $store_id = Store::where("store_name", $request->input("store_name"))->firstOrFail();

        Products::where("id",$request->input("id"))->update([
            "title"=>$request->input("title"),
            "image"=>$request->input("img"),
            "description"=>$request->input("desc"),
            "store_id"=>$store_id
        ]);

        return redirect()->route("adminindex");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Products::where("id",$request->input("id"))->delete();
        return redirect()->back();
    }
}
