<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterData\CategoryMaster;
use App\Models\Product;

class WelcomeController extends Controller
{

    public function index()
    {

        $category_masters = CategoryMaster::where('status_id', 1)->pluck('id')->toArray();
        $products = Product::where('status_master_id', 1)
                            ->get();

        
        return view('welcome',compact('category_masters','products'));
    }

    public function loadMore(Request $request)
    {
        $limit = (int) $request->limit;  // Ensure limit is an integer
        $offset = (int) $request->offset; // Ensure offset is an integer

        $products = Product::where('status_master_id', 1)
                        ->limit($limit)
                        ->offset($offset)
                        ->get();

        return response()->json($products); // Returns JSON response for AJAX requests
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
