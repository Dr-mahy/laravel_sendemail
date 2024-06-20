<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactClient;
use App\Models\User;

class Mycontroller extends Controller
{
    public function my_data(){
        return view('form1');
    }
    public function signed_data(request $request){
        $fname=$request->fname;
        $lname=$request->lname;
        return view('signed',compact('fname','lname'));
    }
    public function session(){
        session()->put('test','my first session');
        return "session created";
    }
    public function deletesession(){
        session()->forget('test');
        return "deleted";
    }
    public function flash(){
        session()->flash('flash','my first flash session');
        return "session created";
    }
    public function restore(){
        return "session value id:".session('flash');
    }
    public function sendemailtoclient(){
        $data=User::FindOrFail(1)->toArray();
        $data['theMessage']='mymessage';
        Mail::to( $data['email'])->send( 
            new ContactClient($data)
            
            );
            return "email sent";
    }

}

