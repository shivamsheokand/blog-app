<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
class ProfileController extends Controller
{
    function profile(){
        $data = User::where('email',Session::get('email'))->first();
        // $data = session()->all('email');
        return view('profile',['data'=>$data]);
    }
}
