<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\DishRequest;

class DishesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $categories = Category::all();
        $dishes = Dish::all();
        
        if($request->has('category_id'))
        {
            $dishes = Dish::where('category_id', $request->category_id)->get();
        }

        return view('administration.manager.dishes.index', array('dishes' =>$dishes, 'categories' => $categories));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        if($categories->count() == 0)
        {
            return redirect()->back()->with( array(
                "message" => "<h3 style='color:red';>Veuillez creer au moins une categorie avant de creer des plats</h3>"
            ));
        } else{
            return view('administration.manager.dishes.create', array('categories' => $categories));
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DishRequest $request)
    {
        Dish::create($request->all());
        return redirect()->Route('dish_index')->with(array(
            "success" => "Votre plat a été créé avec succès",
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        $category = $dish->category->name;
        return view ('administration.manager.dishes.show', compact('dish', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        $categories = Category::all();
        return view('administration.manager.dishes.edit', array("dish" => $dish, "categories" => $categories));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        $dish->update($request->all());
        return Redirect()->Route('dish_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return Redirect()->Route('dish_index');
    }
}
