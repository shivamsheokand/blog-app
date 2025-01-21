<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    function signup(){
        return view('signup');
    }
    function login(){
        return view('login');
    }
    function signupform(Request $req){
        $data = $req->input();
        $data['password']=bcrypt($data['password']);
        $data = User::create($data);

        $result['token']=$data->createToken('loginpass')->plainTextToken;

        if($result==true){
            // echo "signup check";
            
            $req->session()->put('email',$req->email);
            $req->session()->put('all',$req->input());
            return redirect('home');
            return ["sucess"=>true,"message"=>"user regster Sucess","result"=>$result];
        }
        
    }
    function loginform(Request $req){
        $data = User::where('email',$req->email)->first();
        if(!$data || !Hash::check($req->password,$data->password)){
            return ["sucess"=>false,"message"=>"user login faild","resu;t"=>$data];
        }

        $result['token']=$data->createToken('loginpass')->plainTextToken;
        if($result==true){
            $req->session()->put('email',$req->email);
            $req->session()->put('all',$req->input());
            return redirect('home');
            return ["sucess"=>true,"message"=>"user login Sucess","resu;t"=>$result];
        }
    }
    function logout(){
        session()->pull('email');
        // echo session('name');
        return redirect('login');
    }
}
