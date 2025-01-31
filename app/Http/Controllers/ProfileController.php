<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\profile;
use Illuminate\Support\Facades\DB;
class ProfileController extends Controller
{
    function profile(Request $req){
        $data = User::where('email',Session::get('email'))->first();
        $user = profile::where('user',Session::get('email'))->first();
        return view('profile',['data'=>$data,'user'=>$user]);
    }
    function profileedit(){
        $update = profile::where('user',Session::get('email'))->first();
        if($update==true){
        $user = profile::where('user',Session::get('email'))->first();
            return view('updateprofile',['user'=>$user]);
        }else{
            return view('editprofile');
        }
    }
    function editprofile(Request $req){

        $req->validate([
            'img' => 'required|mimes:jpg,jpeg,png|max:2048', 
        ]);
        if ($req->hasFile('img') && $req->file('img')->isValid()) {
            $path = $req->file('img')->store('public');
            $fileArr = explode("/", $path);
            $fileName = $fileArr[1]; 
            $upload = new profile();
            $upload->passion = $req->passion;
            $upload->img = $fileName;
            $upload->user = Session::get('email'); 

            if ($upload->save()) {
                return redirect('profile')->with('success', 'Profile Updated successfully!'); 
            } else {
                return redirect('editprofile')->with('error', 'profile not updated! Please try again.');  // Redirect with error message
            }
        } else {
            return redirect('editprofile')->with('error', 'Invalid image file! Please upload a valid image.');  // Return error if file is invalid
        }
    }
    
    function updateprofile(Request $req){
        $req->validate([
            'img' => 'required|mimes:jpg,jpeg,png|max:2048', 
        ]);
        if ($req->hasFile('img') && $req->file('img')->isValid()) {
            $path = $req->file('img')->store('public');
            $fileArr = explode("/", $path);
            $fileName = $fileArr[1]; 

            $update = DB::table('profiles')->where('user', Session::get('email'))->update([
            'passion' => $req->input('passion'),
            'img' => $fileName,  
        ]);
            

            if ($update==true) {
                return redirect('profile')->with('success', 'Profile Updated successfully!'); 
            } else {
                return redirect('editprofile')->with('error', 'profile not updated! Please try again.');  // Redirect with error message
            }
        } else {
            return redirect('editprofile')->with('error', 'Invalid image file! Please upload a valid image.');  // Return error if file is invalid
        }
    }
    function Logout(Request $req){
        session()->get('email');
        return redirect('login');
    }
}
