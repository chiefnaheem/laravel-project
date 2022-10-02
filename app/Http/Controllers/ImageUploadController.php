<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Images;
use App\Models\Videos;
use App\Models\Comments;
use App\Models\Likes;
// sessin
use Illuminate\Support\Facades\Session;


class ImageUploadController extends Controller
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
    public function create()
    {
        //
    }

 
    public function storeUploads(Request $request) {
     
         $request->validate([
            'url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    if ($request->hasFile('url')) {
        $image = $request->file('url');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/Uploads');
        $image->move($destinationPath, $image_name);
     $save_image = Images::create([
                 'url'=>$image_name,
             ]);
             $save_image->save();
            return response()->json([
                'message' => 'Image uploaded successfully'
            ], 200);
      } 
        else {   
            return response()->json([
                'message' => 'Image not uploaded'
            ], 404);
        
         }

    }


public function UploadVideos(Request $request) {
     
        $request->validate([
           'url' => 'required|video|mimes:mp4,mov,ogg,qt,webm,3gp,3g2,m4v,avi,wmv,flv,swf|max:204800',
       ]);
    if ($request->hasFile('url')) {
        $video = $request->file('url');
        $video_name = time().'.'.$video->getClientOriginalExtension();
        $destinationPath = public_path('/Video_uploads');
        $video->move($destinationPath, $video_name);
     $save_video = Videos::create([
                 'title'=>$request->title,
                 'url'=>$video_name,
             ]);
             $save_video->save();
            return response()->json([
                'message' => 'Video Uploaded successfully'
            ], 200);
      } 
        else {   
            return response()->json([
                'message' => 'Video not Uploaded'
            ], 404);
        
         }

    }



}
