<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $blogs = DB::table('blog')->
        $blogs = Blog::paginate(5);
        return view('blog.index',['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'title' => 'required|unique:blog',
        'subject' => 'required'
      ]);

      $blog =  new Blog;
      $blog->id = rand(10,100);
      $blog->title = $request->input('title');
      $blog->slug  = str_slug($request->input('title'),'-');
      $blog->subject = $request->input('subject');

      $blog->save();

      return redirect('blog')->with('success','Blog Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      $blog = Blog::where('slug',$slug)->first();
      return view('blog.show',['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
      return view('blog.edit',['blog' => $blog]);
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
      $this->validate($request, [
        'title' => 'required|unique:blog',
        'subject' => 'required'
      ]);

      $blog = Blog::find($id);
      $blog->title = $request->input('title');
      $blog->subject = $request->input('subject');

      $blog->save();
      return redirect('/blog')->with('success','Blog edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect('/blog')->with('success','Data deleted');
    }

}
