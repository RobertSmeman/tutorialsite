<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct() {
       $this->middleware('auth');   // alleen toegankelijk als je bent ingelogd.
     }

    public function index()
    {
        $categories = Category::with('entries')->get();   // (???????)
        return view('categories.index', compact($categories, 'categories'));    // gaat naar de cat page.
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

        $this->validate($request, array(
          'name' => 'required|max:255'
        ));   // hier word gekeken dat de input niet langer is dan 255 tekens.

        $category = Category::create($request->all());    // (???????)

        $category->save();    // hier word het opgeslagen.

        Session::flash('success', 'Nieuwe categorie is gemaakt.');   // hier krijg je een berichtje als er een nieuwe categorie is gemaakt.

        return redirect()->route('cat.index');    // hier word je naar de cat page gestuurd.
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
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Category::destroy($id);   // hier word de post met de bijbehorende id verwijderd.

      Session::flash('flash_message', 'Post deleted!');   // als het is verwijderd krijg je dit berichtje in beeld.

      return redirect('cat');
    }
}
