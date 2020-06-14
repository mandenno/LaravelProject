<?php

namespace App\Http\Controllers;

use App\merchants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class merchantController extends Controller
{
    public function index()
    {
        return view('login');
    }
    //a method that creates new merchant
    public function create(Request $request){
    $name=$request->input('name');
    $email=$request->input('email');
    $password=$request->input('password');
    $accountNo=rand(100000,10000000);
    $consumer_key=sha1($email.$password.time());
    $apikey=sha1(md5($email.time()));

    $data=DB::insert('insert into merchants (id,username,email,accountNo,password,apikey,consumer_key)
    values(?,?,?,?,?,?,?)',[null,$name,$email,$password,$accountNo,$consumer_key,$apikey]);
    if($data==1)
    {
        return redirect()->back();
    }
    else{

    }

    }

    public function checklogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);
        $email=$request->input('email');
        $password=$request->input('password');
        $data=DB::select('select * from merchants where email=? and password=?',[$email,$password]);
        if(count($data)>0)
        {

           return redirect('/successlogin');
        }
        else{
            return back()->with('error', 'Wrong login credentials');
        }


    }



    public function successlogin()
    {
        return view('home');
    }

    public function logout(){
        Auth::logout();
        return redirect('/index');
    }
}
