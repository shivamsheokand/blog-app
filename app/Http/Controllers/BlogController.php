<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    function create(){
        return view('create_blog');
    }
    function uploadBlog(Request $req){
        // $data = $req->input();
        $path = $req->file('img')->store('public');
        $fileArr=explode("/",$path);
        $fileName=$fileArr[1];
        $upload = new Blog();
        $upload->title=$req->title;
        $upload->heading=$req->heading;
        $upload->description=$req->description;
        $upload->code=$req->code;
        $upload->author=$req->author;
        $upload->img=$fileName;
        if($upload->save()){
            return redirect('create_blog');
        }else{
            return "blog not added";
        }
    }
}
