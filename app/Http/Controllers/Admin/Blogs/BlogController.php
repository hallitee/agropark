<?php

namespace App\Http\Controllers\Admin\Blogs; 
use App\blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Shop\Tools\UploadableTrait;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blog = blog::paginate(10);
        return view('admin.blogs.list')->with(['blogs'=>$blog]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //
        $b = new blog;
        $b->title = $req->title;
        $b->description = $req->description;
        if ($req->hasFile('cover')) {
           // $b->cover =$req->file('cover')->store('blogs');
             $b->cover = Storage::disk('public')->put('blogs', $req->cover);
        }
        $b->save();
        return redirect()->route('admin.blogs.index')->with('message', 'Blog  created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        //
        return view('admin.blogs.edit')->with(['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update($params,Request $req)
    {
            $b = blog::find($params);
           if (isset($req['title'])) {
                 $b->title = $req['title'];
            }
           if (isset($req['description'])) {
                 $b->description = $req['description'];
            }     
           if (isset($req['cover'])) {
                 $b->cover = Storage::disk('public')->put('blogs', $req->cover);
            }                
            $b->save();
     
          return redirect()->route('admin.blogs.index')->with('message', 'Blog  updated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
         return $req;
       //  $b = blog::find($blog->id)->delete();
         //return redirect()->route('admin.blogs.index')->with('message', 'Blog  deleted'); 
    }
}
