<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use Session;

class SectionController extends Controller
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

      $section = Section::create($request->all());    // (???????)

      $section->save();    // hier word het opgeslagen.

      Session::flash('success', 'Nieuwe categorie is gemaakt.');   // hier krijg je een berichtje als er een nieuwe categorie is gemaakt.

      return redirect()->route('admin.posts.sections');
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
      $section = Section::all();
      return view('admin.posts.sections', compact($section, 'section'));
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
      Section::destroy($id);   // hier word de post met de bijbehorende id verwijderd.

      Session::flash('flash_message', 'Post deleted!');   // als het is verwijderd krijg je dit berichtje in beeld.

      return redirect('/admin');
    }
}
