<?php

namespace App\Http\Controllers;
use App\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public  function admin_login(Request $req){

        $email = $req->get('email');
        $password = $req->get('password');
        $regesters = Admin::all();
        foreach($regesters as $regester ){
                if($regester['email']==$email && $regester['password']==$password){
                    
                    session()->put('admin',$regester);
                    Admin::where('id',$regester['id'])->update(
                        ['username' => session('admin')['username'],
                        ]);
                    return Redirect('/admin');
                    
                }

        }
        return view('admin_login')->with('message','invalid account.......');
    }




public function admin_deconnexion(){

    session(['admin' => []]);    return view('/admin_login');

}

}