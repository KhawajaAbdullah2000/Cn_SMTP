<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ImapController extends Controller
{
    
    public function receive_view_form(Request $req){
        $email=$req->email;
        $password=$req->password;
    $response = Http::asForm()->post('http://127.0.0.1:5000/receive', [
          'email'=>$email,
          'password'=>$password
     ]);
    $data=$response->json();
    dd($response);
       return view('log',['data'=>$data]);

    }
}
