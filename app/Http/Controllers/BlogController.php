<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Session;
class BlogController extends Controller
{
    function create(){
        return view('create_blog');
    }
    function uploadBlog(Request $req){
        // Validate the incoming request
        $req->validate([
            'title' => 'required|string|max:255',               // Title is required and should be a string with max length of 255 characters
            'heading' => 'required|string|max:500',              // Heading is required and should be a string with max length of 500 characters
            'description' => 'required|string',                  // Description is required and should be a string
            'code' => 'nullable|string',                          // Code is optional but should be a string if provided
            'author' => 'required|string|max:100',               // Author is required and should be a string with max length of 100 characters
            'img' => 'required|mimes:jpg,jpeg,png|max:2048',     // Image file is required, must be jpg/jpeg/png with a max size of 2MB
        ]);

        // Handling the file upload
        if ($req->hasFile('img') && $req->file('img')->isValid()) {
            $path = $req->file('img')->store('public');  // Store the image in 'public/blog_images' folder
            $fileArr = explode("/", $path);
            $fileName = $fileArr[1];  // Get the file name from the path

            // Create a new blog record
            $upload = new Blog();
            $upload->title = $req->title;
            $upload->heading = $req->heading;
            $upload->description = $req->description;
            $upload->code = $req->code;
            $upload->author = $req->author;
            $upload->img = $fileName;
            $upload->myblogs = Session::get('email');  // Store the email of the current session (user)

            // Save the blog to the database
            if ($upload->save()) {
                return redirect('create')->with('success', 'Blog created successfully!');  // Redirect with success message
            } else {
                return redirect('create')->with('error', 'Blog not added! Please try again.');  // Redirect with error message
            }
        } else {
            return redirect('create')->with('error', 'Invalid image file! Please upload a valid image.');  // Return error if file is invalid
        }
    }

    function blogs(){
        $data = Blog::all();
        // return $data;
        return view('blogs',["data"=>$data]);
    }
    function getblogs(Request $req,$id){
        $data = Blog::find($id);
        return view('showblog',['data'=>$data]);
    }
    function myblogs(){
        $my = Blog::where('myblogs', Session::get('email'))->get();
        return view('myblogs',['my'=>$my]);
    }
}
