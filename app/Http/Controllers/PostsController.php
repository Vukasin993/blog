<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
            $publishedPosts = Post::published()->with('comments')->orderBy('title', 'asc')->get();
            return view('posts.all', ['posts' =>$publishedPosts]);
            // drugi nacin
           // $posts =Post::where('is_published', 1)->get();
           // return view('posts.all', compact('posts'));
          
     
    }

    public function onePost($id)
    {
        $post = Post::find($id);
        $comments = $post->comments;
        if (!$post) {
            return view('post_not_found');
        }

        return view('posts.single', [
            'id' => $post->id,
            'title' =>$post->title, 
            'body' =>$post->body, 
            'comments' => $comments]);

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {   


         $data = $request->validated();
;
        $newPost = Post::create($data);

        // drugi nacin:
        //$newPost = new Post;
        //$newPost->title = $data['title'];
        //$newPost->body = $data['body'];
        //$newPost->is_published = $request->get('is_published', false);
        
        //$newPost->save()

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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
