<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class Email_Controller extends Controller

{
   
    public function send_mail_view(){

        return view('send_mail_form');
    }

    public function send_email(Request $req){
        $validated = $req->validate([
            'subject' => 'required|max:50',
            'body' => 'required',
            'receiver_email'=>'required'
        ]);
        $users = DB::table('users')->orderBy('id','desc')->first();
        $subject=$req->subject;
        $body=$req->body;
        $sender_email=$users->email;
        $password= $users->password;
        $receiver_email=$req->receiver_email;
        $name='empty';

        if ($req->file('myfile')) {
            $image =$req->myfile;
            $name=$image->getClientOriginalName();
    
            $image->storeAs('public/images',$name);
        }
        //attachment
        
        $response = Http::asForm()->post('http://127.0.0.1:5000/test', [
            'subject'=>$subject,
            'body'=>$body,
            'sender_email'=>$sender_email,
            'receiver_email'=>$receiver_email,
            'password'=>$password,
            'file_path'=>$name
        ]);

        $data=$response->json();
        return view('send_mail_form',['data'=>$data]);


    }

    public function login(Request $req){
        $validated = $req->validate([
            'sender_email'=>'required|max:100',
            'password'=>'required',
        ]);
        $sender_email=$req->sender_email;
        $password= $req->password;
        DB::table('users')->insert([
            'email' => $sender_email,
            'password' => $password
        ]);
        return view('send_mail_form');
    }

    public function logout(){
      return redirect('/');
    }

    // public function receive_view_form(Request $req){
    //     $email=$req->email;
    //     $password=$req->password;
    // $response = Http::asForm()->post('http://127.0.0.1:5000/receive', [
    //       'email'=>$email,
    //       'password'=>$password
    //  ]);
    // $data=$response->json();
    // dd($response);
    //    return view('log',['data'=>$data]);

    // }
}
