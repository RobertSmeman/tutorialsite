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
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $posts = Post::where('title', 'LIKE', "%$keyword%")
				->orWhere('content', 'LIKE', "%$keyword%")
				->orWhere('category_id', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $posts = Post::with('category')->get();
        }
        $posts = Post::paginate(6);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create')->withCategories($categories);
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
        $post = Post::create($request->all());
        // $posts = new Post;
        //
        // $posts->title = $request->title;
        // $posts->content = $request->content;
        // $posts->category = $request->category;

        if ($request->hasFile('upload')) {
          $this->validate($request, [
              'upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
        $image = $request->file('upload');
        $filename = $post->id . '.' . Input::file('upload')->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make(Input::file('upload'))->resize(1500, 800)->save($location);

        $post->upload = $filename;

        }

        $post->save();

        Session::flash('flash_message', 'Post added!');

        return redirect('admin');
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

        $post = Post::find($id);
        dd($post);
        $categories = Category::all();
        return view('admin.posts.show', compact('post', 'categories'));
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
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin.posts.edit', compact('post'))->withCategories($categories);
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

        $requestData = $request->all();



        $post = Post::findOrFail($id);

        $image = Input::file('upload');
        $filename  = $post->id . '.' . Input::file('upload')->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make(Input::file('upload'))->resize(1500, 800)->save($location);

        $post->upload = $filename;
        $post->save();
        $post->update($requestData);



        return redirect('admin');
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
        Post::destroy($id);

        Session::flash('flash_message', 'Post deleted!');

        return redirect('admin');
    }
}
