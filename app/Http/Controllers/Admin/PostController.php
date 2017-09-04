<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->pluck('name', 'id');
        $tags = Tag::all()->pluck('tag', 'id');

        return view('admin.posts.create',
            [
                'categories' => $categories,
                'tags' => $tags,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);


        $data = $request->all();
//        var_dump($data);
//        die;
        if (isset($data['post_tags'])) {
            $tags = $data['post_tags'];
        } else {
            $tags = [];
        }

        $data['user_id'] = auth()->user()->id;

        $post = Post::create($data);

        // Redirection et message
        if ($post->exists) {
            if (count($tags) > 0) {
                $post->tags()->attach($tags);
            }
            Session::flash('message', 'Nouveau post créé');
            return redirect()->route('AdminPostIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminPostCreate');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.show', ['post' => $post]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id The id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validation des données
        $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string',
        ]);
        $post = Post::findOrFail($id);

        if ($post->update($request->all())) {
            Session::flash('message', 'Post mise à jour');
            return redirect()->route('AdminPostIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminPostEdit', ['id' => $id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id The Id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        Session::flash('message', 'Post supprimé');

        return redirect()->route('AdminPostIndex');
    }
}
