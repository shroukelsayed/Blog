<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;


class BlogController extends Controller
{
     public function create (Request $request)
     {
     	$data = $request->all();
     	// dd($data);
     	Blog::create($data);
        return Response()->json(array(
                               // 'status'=>'success',
                               "messages"=> array( ["text"=> "great successfully added"] )

                                
                                    ));

     }


    public function blogs()
    {
      $blog=Blog::first();
      return Response()->json(array('messages'=>array(["text"=>$blog->content]) )); 
    }


}
