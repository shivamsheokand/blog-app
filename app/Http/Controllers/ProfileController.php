<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Blog;
class ProfileController extends Controller
{
    function profile(Request $req){
        $data = User::where('email',Session::get('email'))->first();
        $my = Blog::where('myblogs', Session::get('email'))->get();
        return view('profile',['data'=>$data,'my'=>$my]);
        // return Blog::where('myblogs', Session::get('email'))->get();
    }
}
