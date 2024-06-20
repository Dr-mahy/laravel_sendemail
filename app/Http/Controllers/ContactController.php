<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Mail\ContactMail;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $contacts=contact::get();
       return view('contacts',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contactusform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|max:200',
            'email'=>'required|email:rfc',
            'subject'=>'required|max:100',
            'message'=>'required|max:300|min:10',
        ]
        );
        Contact::Create($data);
            return redirect('contacts');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function sendcontactmail(){
        $data=Contact::FindOrFail(2)->toArray();
        $data['theMessage']=$data['message'];
        Mail::to( $data['email'])->send( 
            new ContactMail($data)
            
            );
            return "email sent";
    }
}
