<?php

 namespace App\Http\Controllers;
 use Illuminate\Support\Facades\DB;
 use App\Post;

class PostsController extends Controller
{
    public function show($slug)
    {
        $post = DB::table('posts')->where('slug', $slug)->first();
            //  dd($post);
            $post= Post::where('slug', $slug)->firstOrFail();

        // $posts = [
        //             'my-first-post' => 'First Post',
        //             'my-second-post' => 'second post'
        //         ];
                
                // if (! $post) {
                //     abort(404);
                // }
            
                return view('post', [
                     'post' => $post
                ]);
    }
}