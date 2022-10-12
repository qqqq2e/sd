<?php

namespace App\Http\Controllers;
use App\Regester;
use App\Reunion;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Redirect;


class RegesterController extends Controller
{
    //

    public function check(){
       if(!session('user')){
        return Redirect('/log');
       }
       return Redirect('/d');        
    }


//     public  function to_name(Request $req){
//         $name = $req->get('name');
//         // session('user')['email'];
// $regesters = Regester::all();
// foreach($regesters as $regester){
//     if($regester['email']  == session('user')['email']){
//         $email    = session('user')['email'];
//         $username = $regester['username'];
//     }
// }
//         return view('/live')->with('name',$name)->with('email',$email)->with('username',$username);
//         // return date('H:i:s');
//     }


    public  function regester(Request $req){

          
        $check = $req->get('check');
        if(!$check) return view('register')->with('message','checked.......');
        $check = $req->get('generate');
        $password1 = $req->get('password1');
        $password2 = $req->get('password2');
        $password = $req->get('password');
        if(!$check && $password1!=$password2) return view('register')->with('message','password not match.......');
        if(!$check && $password1==$password2) {
            $password=$password1;
        }
        $username = $req->get('username');
        $age = $req->get('age');
        $country = $req->get('country');
        $email = $req->get('email');
        $phone = $req->get('phone');
        $image = $req->get('image');
        $new_title_image=time().$image.'.'.$req->image->extension();
        $req->image->move(public_path('images/users'),$new_title_image);

        $regesters = Regester::all();
        foreach($regesters as $regester ){
                if($regester['email']==$email){
                    return view('reg')->with('message','user already exist.......');
                }

        }

      $regester =  Regester::create([
            'username'=>$username,
            'password'=>$password,
            'age'=>$age,
            'country'=>$country,
            'email'=>$email,
            'phone'=>$phone,
            'image'=>$new_title_image,
            'adresse'=>'',
        ]);
        session()->put('user',$regester);
        return Redirect('/d');
    }






    public  function login(Request $req){

        $email = $req->get('email');
        $password = $req->get('password');
        $regesters = Regester::all();
        foreach($regesters as $regester ){
                if($regester['email']==$email && $regester['password']==$password){
                    
                    session()->put('user',$regester);
                    Regester::where('id',$regester['id'])->update(
                        ['username' => session('user')['username'],
                        ]);
                    return Redirect('/d');
                    
                }

        }
        return view('log')->with('message','invalid account.......');
    }







// public function info_to_meeting(){
//     if(!session('user')){
//         return Redirect('/login_t');
//        }  
//     return view('live');
// } 





public function to_profile(){
    if(!session('user')){
        return Redirect('/login_t');
       }
       
       $regesters = Regester::all();
       foreach($regesters as $regester ){
               if($regester['email'] == session('user')['email']){
                   $image = $regester['image'];
                   $username = $regester['username'];
                   $email = $regester['email'];
                   $created_at = $regester['created_at'];
                   $password = $regester['password'];
                   $country = $regester['country'];
                   $age = $regester['age'];
                   $adresse = $regester['adresse'];
                   $phone = $regester['phone'];
                   return view('profile')->with('image',$image)->with('username',$username)->with('email',$email)->with('created_at',$created_at)->with('password',$password)->with('country',$country)->with('age',$age)->with('adresse',$adresse)->with('phone',$phone); 
                   }
       }
    
} 


public function d(){
    if(!session('user')){
        return Redirect('/log');
       }  
    return view('dashboard');
} 



public function me(){
    if(!session('user')){
        return Redirect('/log');
       }  
       $regesters = Regester::all();
       foreach($regesters as $regester ){
               if($regester['email'] == session('user')['email']){
                   $image = $regester['image'];}}
       return view('me')->with('image',$image);
} 



public function log(){
    // if(!session('user')){
    //     return Redirect('/login_t');
    //    }  
    return view('log');
} 
public function join(){
    if(!session('user')){
        return Redirect('/log');
       }  
       $regesters = Regester::all();
       foreach($regesters as $regester ){
               if($regester['email'] == session('user')['email']){
                   $image = $regester['image'];}}
       return view('join')->with('image',$image);
} 
public function cont(){
    if(!session('user')){
        return Redirect('/log');
       }  
       $regesters = Regester::all();
       foreach($regesters as $regester ){
               if($regester['email'] == session('user')['email']){
                   $image = $regester['image'];}}
       return view('cont')->with('image',$image);
} 
public function profile(){
    if(!session('user')){
        return Redirect('/log');
       }  
       return view('profile');
} 

public function join_to_room(Request $req){
        $name = $req->get('name');
        $reunions = Reunion::all();
        foreach($reunions as $reunion){
            if($reunion['title'] == $name && $reunion['expire'] == 'non'){
             $participants = $reunion['participants'];
             if(!$participants)$participants = session('user')['id'];
             else
             $participants = $participants.','.session('user')['id'];
             Reunion::where('id',$reunion['id'])->update(
                [
                    'participants' => $participants,
                ]);
                $url = 'https://meet.jit.si/'.$name;
                return Redirect::to($url);
            }
            
        }
        return view('join')->with('message','room expired......');

        
} 
public function logout(){

    session(['user' => []]);    return Redirect('/check');

}







public function to_name2(Request $req){

    $check = $req->get('check');
    if(!$check){
        return view('me')->with('message','accept please terme........');
    }
    $name = $req->get('name');
    $password = $req->get('password');
    $categorie = $req->get('categorie');
    $mic = $req->get('mic');
    $camera = $req->get('camera');
    $lan = $req->get('lan');

 
    $regesters = Regester::all();
    foreach($regesters as $regester){
        if($regester['email']  == session('user')['email']){
            $email    = session('user')['email'];
            $username = $regester['username'];
            $host_id  = $regester['id'];
            $image = $regester['image'];

        }
    }
 
  $reunion =  Reunion::create([
        'host_id'=>$host_id,
        'categorie'=>$categorie,
        'title'=>$name,
        'language'=>$lan,
        'participants'=>'',
        'expire'=>'non'
    ]);
   $reunions = Reunion::all();
   foreach($reunions as $reunion){
       if($reunion['host_id'] == session('user')['id'] && $reunion['title'] == $name){
        $id = $reunion['id'];
       }
   }

            return view('/live')->with('name',$name)->with('email',$email)->with('username',$username)->with('mic',$mic)->with('camera',$camera)->with('lan',$lan)->with('image',$image)->with('id',$id)->with('password',$password);

}




public function modify_information(Request $req){
    $username = $req->get('username');
    $age = $req->get('age');
    $country = $req->get('country');
    $phone = $req->get('phone');
    $adresse = $req->get('adresse');
    $image = $req->get('image');
    $pass1 = $req->get('pass1');
    $pass2 = $req->get('pass2');
    $password = $req->get('password');
    $regesters = Regester::all();

    foreach($regesters as $regester ){
        
            if($regester['email'] == session('user')['email']){  
                $image = $req->get('image');

                if(!$image){
                    $new_title_image=$regester['image'];
                } else{
                    $new_title_image=time().$image.'.'.$req->image->extension();
                    $req->image->move(public_path('images/users'),$new_title_image);
                }
                if($pass1 != $pass2){
                    return view('profile')->with('message','password no match.......')->with('image',$regester['image'])->with('username',$regester['username'])->with('email',$regester['email'])->with('created_at',$regester['created_at'])->with('password',$regester['password'])->with('country',$regester['country'])->with('age',$regester['age'])->with('adresse',$regester['adresse'])->with('phone',$regester['phone']); 
                }
                if($pass1 == $pass2 && $pass1 == ''){
                    $password = $regester['password'];
                }
                if($pass1 == $pass2 && $pass1 != ''){
                    $password = $pass1;
                }
                if(!$adresse){
                    $adresse = '';
                }
                Regester::where('id',$regester['id'])->update(
                    ['username' => $username,
                        'age' => $age,
                        'country' => $country,
                        'phone' => $phone,
                        'adresse' => $adresse,
                        'image' => $new_title_image,
                        'password' => $password,
                    ]);
                        session()->put('user',$regester);
                        // return view('profile')->with('message','success to update.........')->with('image',$regester['image'])->with('username',$regester['username'])->with('email',$regester['email'])->with('created_at',$regester['created_at'])->with('password',$regester['password'])->with('country',$regester['country'])->with('age',$regester['age'])->with('adresse',$regester['adresse'])->with('phone',$regester['phone']); 
                    return Redirect('profile');
                    }
    }

    // return view('profile')->with('message','invalid information.......');
}







}
