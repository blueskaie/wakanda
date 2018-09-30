<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Auth
use Illuminate\Support\Facades\Auth;
use App\Comment;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $post_id =  $request->input("post_id");
        $comment_id =  $request->input("comment_id");
        // dd($comment_id);
        return view('client/post/ajaxform', ['post_id'=>$post_id, 'comment_id'=>$comment_id]);
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
        $user = Auth::user();
        // dd($user->email);
        // return $user->email;
        $comment = new Comment;
        $comment->comment_post_id =  $request->input("post_id");
        $comment->comment_id =  $request->input("comment_id");
        $comment->comment_content = $request->input("reply_text");
        $comment->comment_author = $user->name;
        if ($user->email) $comment->comment_author_email = $user->email;
        if ($user->url) $comment->comment_author_url= $user->url;
        $comment->comment_author_ip= $request->ip(); 
        $comment->user_id=$user->id;
        $comment->save();
        // dd($comment);
        return view('client/post/ajaxcomment', ['comment'=>$comment]);
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
