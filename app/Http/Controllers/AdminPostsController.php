<?php

namespace App\Http\Controllers;

use App\Post;
use App\Photo;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostCreateRequest;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $categories = Category::pluck('name' , 'id')->all();  
        return view('admin.posts.create' , compact('categories') );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {   
        $input = $request->all();

        if($file = $request->file('photo_id')){

           $fileName = time().$file->getClientOriginalName();
           $file->move('images', $fileName);

           $photo = Photo::create(['src'=> $fileName]);
           $input['photo_id'] = $photo->id;

        }

        $input['user_id'] = Auth::user()->id;

        Post::create($input);
        return redirect('/admin/posts');


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
        $post = Post::find($id);
        $categories = Category::pluck('name' , 'id')->all();  
        return view('admin.posts.edit' , compact('post','categories') );
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
        $input = $request->all();

        if($file = $request->file('photo_id')){

            $photoName = time().$file->getClientOriginalName();
            $file->move('images', $photoName);

            $photo = Photo::create(['src'=>$photoName]);
            $input['photo_id'] = $photo->id;            
        }

        $post = Post::find($id);
        $post->update($input);

        return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if($photoId = $post->photo_id){
            
            $photo = Photo::find($photoId);
            unlink(public_path().'/'.$photo->src);
            $photo->delete();   
        }

        $post->delete();

        return redirect('/admin/posts');

    }
}
