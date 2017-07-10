<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use Illuminate\Http\Request;
use App\Category;
use Session;
use Image;
use Storage;
use Input;

class PostsController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');    // werkt alleen als je bent ingelogd
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');   //de woorden die je bij search invuld worden als keyword hieronder verwerkt
        $perPage = 25;    // het aantal blokjes dat in admin staat? word gebruikt vor paginate.

        if (!empty($keyword)) {   // als keyword niet leeg is dan word dit gedeelte uitgevoerd.
            $posts = Post::where('title', 'LIKE', "%$keyword%")   // hier word gekeken of het keyword overeenkomt met een woord uit de tabel titel.
				->orWhere('content', 'LIKE', "%$keyword%")    // hier word gekeken of het keyword overeenkomt met een woord uit de tabel content.
				->orWhere('category_id', 'LIKE', "%$keyword%")    // hier word gekeken of het keyword overeenkomt met een woord uit de tabel category_id.
				->paginate($perPage);   //zorgd voor de pijltjes en getallen onder aan het scherm voor de pagina's perPage geeft aan hoeveel oderdelen er op een pagina mogen staan.
        } else {
            $posts = Post::with('category')->get();   //(?????????)
        }
        $posts = Post::paginate(6);   // 6 onderdelen per pagina, (is dit van de homepage?)
        return view('admin.posts.index', compact('posts'));   //stuurd je naar de admin page met het overzicht van alle blokjes.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();    //(???????)
        return view('admin.posts.create')->withCategories($categories);   // gaat naar de create page. en gebruikt daar Categories onderdelen.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        // dd($request);
        $post = Post::create($request->all());    // (??????????)
        // $posts = new Post;
        //
        // $posts->title = $request->title;
        // $posts->content = $request->content;
        // $posts->category = $request->category;

        if ($request->hasFile('upload')) {    // als $request een file in upload heeft dan word het gevalideerd, er word dan gekeken of het wel een toegestaan type bestand is en of het niet te groot is.
          $this->validate($request, [
              'upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
        $image = $request->file('upload');    // hier word de upload in $request omgezet naar $image.
        $filename = $post->id . '.' . Input::file('upload')->getClientOriginalExtension();    //hier haalt hij de originele naam van het bestand op???(???????)
        $location = public_path('images/' . $filename);   // hier word de loatie gemaakt waar het bestand word opgeslagen. dus in het mapje images met de naam die het in $filename heeft gekregen.
        Image::make(Input::file('upload'))->resize(1500, 800)->save($location);   // hier word het bestand in upload geresized (andere afmetingen) en daarna opgeslagen in de locatie die in $location is gezet.

        $post->upload = $filename;    // als het word opgeslagen in de database dan komt in de colom upload de $filename te staan.


        }

        $post->save();    // hier word het opgeslagen in de database

        Session::flash('flash_message', 'Post added!');   //als het zonder problemen is opgeslagen in de database komt dit berichtje in beeld.

        return redirect('admin');   //na het succesvol opslaan word je terug gestuurd naar de admin page.
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {

        $post = Post::find($id);    // hier word de bijbehorende id opgezocht. dus als het bijvoorbeeld id 4 heeft dan krijg je in de show ook alleen maar alles te zien wat bij id 4 hoord.
        $categories = Category::all();    // (???????)
        return view('admin.posts.show', compact('post', 'categories'));   // gaat naar de show page. compact houd in dat het de pagina onderdelen bevat uit de post en categories tabellen.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.posts.edit', compact('post'))->withCategories($categories);    // hier ga je naar de edit page. en post bevat hier ook onderdelen van categories.
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {

        $requestData = $request->all();   // hier word alles opgevraagd??????

        $post = Post::findOrFail($id);    // hier word weer de id opgezocht?????? en als dat niet lukt word er niet geupdate??????

        $image = Input::file('upload');   // in $image komt de file die in upload is gezet.
        $filename  = $post->id . '.' . Input::file('upload')->getClientOriginalExtension();   // hier wrod de naam van de fie gemaakt en in $filename gezet.
        $location = public_path('images/' . $filename);   // locatie waar de file word opgeslagen.
        Image::make(Input::file('upload'))->resize(1500, 800)->save($location);   //de file word geresized en daarna in de locatie opgeslagen.

        $post->upload = $filename;    // als het word geupdate dan komt in de kolom upload de naam die in $filename staat.
        $post->content = $request->input('content');    // in de kolom content komt de text te staan die in content is gezet.
        $post->category_id = $request->input('category_id');    // in category kunnen meerdere categorieën staan dus word met de id de juiste gekozen.
        $post->title = $request->input('title');    // in de kolom title komt de text te staan die in title is gezet.
        $post->snippet = $request->input('snippet');    // in de kolom snippet komt de text te staan die in snippet is gezet.

        $post->save($requestData);    // hier word alles opgeslagen.

        return redirect('admin');   // hier word je terug gestuurd naar de admin page.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Post::destroy($id);   // hier word de post met de bijbehorende id verwijderd.

        Session::flash('flash_message', 'Post deleted!');   // als het is verwijderd krijg je dit berichtje in beeld.

        return redirect('admin');   // hier word je weer teruggestuurd naar de admin page.
    }
}
