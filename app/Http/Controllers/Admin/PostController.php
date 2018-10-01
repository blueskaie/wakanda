<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $posts = Post::where('post_type','=','post')->orderBy('created_at', 'desc')->paginate(10);
        if ($request->ajax()){
            return view('admin/postsboard/ajaxpostlist', compact('posts'));
        }
        return view('admin/postsboard/index',compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/postsboard/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->input('post');
        $newpost = new Post;
        $newpost->post_title = $post['title'];
        $newpost->post_content = $post['content'];
        $newpost->created_at_gmt = date('Y-m-d H:i:s');
        $newpost->updated_at_gmt = date('Y-m-d H:i:s');
        $newpost->save();
        return redirect('admin/posts');
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
        dd("show");
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
        $post = Post::find($id);
        // dd($post);
        return view('admin/postsboard/edit', ['post'=>$post]);
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
        // dd("update");
        $update = $request->input('post');
        $post = Post::find($id);
        $post->post_title = $update['title'];
        $post->post_content = $update['content'];
        $post->updated_at_gmt = date('Y-m-d H:i:s');
        $post->save();
        return redirect('admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $result = Post::destroy($id);
    }
}
