<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PagesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
 {
   $posts = Post::paginate(6);    // 6 onderdelen per pagina.
     return view('pages.welcome')->withPosts($posts);   // hier word je naar de welcome page gestuurd dat is de localhost:8000 page. WithPosts want hier komen ze te staan.
 }

 public function gerard()
 {
   return view('gerard.gerard');    // hier word je naar de gerard page gestuurd. dat is de page die je krijgt als je succesvol bent ingelogd.
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
   public function show($id)
    {
        $posts = Post::find($id);   // hier pakt ie de posts met het bijbehorende id.
        return view('tutorial.single')->withPosts($posts);    //hier ga je naar de tutorial page. dat is de page die je krijgt als je op een blokje (post) klikt in de welcome page. 
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
