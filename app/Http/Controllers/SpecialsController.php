<?php

namespace App\Http\Controllers;

use App\Special;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\SpecialRequest;
use Illuminate\Support\Facades\Storage;

class SpecialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specials = Special::all();
        return view("administration.manager.specials.index", array("specials" => $specials));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administration.manager.specials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SpecialRequest $request)
    {

        $image = $request->image;
        $image_complete_name = time() . $image->getClientOriginalName();

        $image->move('uploads/specials/', $image_complete_name);

        Special::create(array(
            "name" => $request->name,
            "image" => "uploads/specials/" . $image_complete_name,
            "description" => $request->description,
            "price" => $request->price,
            "genre" => $request->genre,
            
        ));

        return redirect()->Route('special_index')->with(array(
            "success" => "Votre plat du jour a été créé avec succès",
        ));
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
    public function edit(Special $special)
    {
        $specials = Special::all();
        return view('administration.manager.specials.edit', array("special" => $special));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Special $special)
    {
        //Suppression de l'ancienne image de ce plat du jour
        $path = parse_url($special->image);
        File::delete(public_path($path['path']));

        //Insertion de la nouvelle image
        $image = $request->image;
        $image_complete_name = time() . $image->getClientOriginalName();

        $image->move('uploads/specials/', $image_complete_name);

        $special->update(array(
            "name" => $request->name,
            "image" => "uploads/specials/" . $image_complete_name,
            "description" => $request->description,
            "price" => $request->price,
            "genre" => $request->genre,
            
        ));
        
        return Redirect()->Route('special_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Special $special)
    {
        $path = parse_url($special->image);
        File::delete(public_path($path['path']));
        
        $special->delete();
        return Redirect()->Route('special_index');
    }
}
