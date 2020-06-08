<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        $dishes_of_Desserts = DB::table('dishes')
                            ->join('categories', 'dishes.category_id', '=', 'categories.id')
                            ->where('categories.name', '=', 'Desserts')
                            ->select('categories.name', 'dishes.*')
                            ->get();

       // $dishes = Dish::all();
        //$dishes = DB::table('dishes')
                    //->join('categories', 'dishes.category_id', '=', 'categories.id')
                    //->select('categories.name', 'dishes.*')
                    //->get();

        return view('index', array("categories" => $categories, "dishes_of_Desserts" => $dishes_of_Desserts));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
