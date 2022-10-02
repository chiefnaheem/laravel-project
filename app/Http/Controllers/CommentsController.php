<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Comments;
use App\Models\Videos;
use App\Models\Images;

class CommentsController extends Controller
{
   public function index()
    {
        return view('comments');
    }


    public function fetchComments()
    {
        $comments = Comments::all();
        return response()->json($comments);
    }



      public function post_comment(Request $request, $id){
        $post = Posts::find($id);
        if(!$post){
            return response()->json([
                'message' => 'Post not found'
            ], 404);
        }
       if($post){
        $comment = Comments::create(
            [
                'body' => $request->body,
                'post_id' => $id
            ]   
        );
        return $comment;

            
       }
    }

     public function image_comment(Request $request, $id){
        $image = Images::find($id);
        if(!$image){
            return response()->json([
                'message' => 'Img not found'
            ], 404);
        }
       if($image){
        $comment = Comments::create(
            [
                'body' => $request->body,
                'post_id' => $id
            ]   
        );
        return $comment;

            
       }
    }
     


     public function fetchComment($id) {
        $post = Posts::find($id);
        $comment = Comments::where('post_id', $post->id)->get();
        if(!$comment){
            return response()->json([
                'message' => 'Be the first to comment on this post'
            ], 404);
        }
        return response()->json($comment);


    }


    public function store(Request $request)
    {
        $comment = Comments ::create($request->all());
        event(new CommentEvent($comment));
        return $comment;
 
    }


}
