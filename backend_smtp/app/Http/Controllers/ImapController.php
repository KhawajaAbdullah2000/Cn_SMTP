<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ImapController extends Controller
{
    
    public function receive_view_form(Request $req){
        $validated = $req->validate([
            'sender_email' => 'required|max:50',
            'password' => 'required'
        ]);
        $email=$req->sender_email;
        $password=$req->password;
    $response = Http::asForm()->post('http://127.0.0.1:5000/receive', [
          'email'=>$email,
          'password'=>$password
     ]);

     $data=$response->json();
     return view('my_emails',['data'=>$data]);

    }
}
