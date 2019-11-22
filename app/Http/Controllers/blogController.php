<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
    public function index(){
        $article = DB::table('articel')->get();
        return view('blog.read',['article' => $article]);
    }
    public function delete($id){
        DB::table('articel')->where('id',$id)->delete();

        return redirect('/blog');
    }
    public function create(){
        return view('blog.create');
    }
    public function store(Request $request){
        $data = [
            "name" => $request->title,
            "description" => $request->description
        ];
        DB::table('articel')->insert($data);
        return redirect('/blog/create');
    }
    public function edit($id){
        $article = DB::table('articel')->where('id',$id)->get();
        return view('blog.edit',['article' => $article]);
    }
    public function update(Request $request){
        $data = [
            'name' => $request->title,
            'description' => $request->description
        ];
        $where = [
            'id' => $request->id
        ];
        DB::table('articel')->where($where)->update($data);
        return redirect('/blog');
    }
}
