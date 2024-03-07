<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterData\CategoryMaster;
use App\Models\Product;
use DB;
// use Validator;

class WelcomeController extends Controller
{

    public function index()
    {

        $category_masters = CategoryMaster::where('status_id', 1)->get();
        $products = Product::where('status_master_id', 1)
                            ->get();

        return view('welcome',compact('category_masters','products'));
    }

    public function search_by_genres(Request $request)
    {

        dd($request);

        $categoryMasterId = $request->category_master_id; // Access validated data
       
        dd($categoryMasterId);


        $products = Product::from('products as a')
        ->leftJoin('category_masters as b', 'a.category_master_id', '=', 'b.category_master_id')
        ->where('a.category_master_id', 'LIKE', "%$categoryMasterId%")  // Use LIKE with %
        ->get();

    //     $products = Product::from('products as a')
    // ->leftJoin('category_masters as b', 'a.category_master_id', '=', 'b.category_master_id')
    // ->whereRaw(":category_id = ANY(string_to_array(a.category_master_id, ','))", ['category_id' => $categoryMasterId])
    // ->get();
    

    // dd($products);
    
        // $products = DB::connection('pgsql')->select($query, ['category_master_id' => $category_master_id]);

        // return response()->json($products);
        return view('welcome',compact('products'));

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
