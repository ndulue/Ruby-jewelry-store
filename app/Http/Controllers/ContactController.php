<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getContact(){
        return view('layout\contact');
    }

    public function storeContact(Request $request){

        $request->validate([
            'first_name' => 'required|string|max:250',
            'last_name' => 'required|string|max:250',
            'email_address' => 'required|email|max:250',
            'contact_subject' => 'required|string',
            'message' => 'required|string'
        ]);

        $contact = new Contact;
        $contact->first_name = $request->input('first_name');
        $contact->last_name = $request->input('last_name');
        $contact->email = $request->input('email_address');
        $contact->subject = $request->input('contact_subject');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect()->route('success.layout')->with([
            'success' => 'Your message has been received, you will get back to you as soon as possible'
        ]);

        return[
            'first_name.required' => 'Enter your first name',
            'last_name.required' => 'Enter your last name',
            'email_address.required' => 'Enter your email',
            'contact_subject.required' => 'Enter your subject',
            'message.required' => 'Enter your message',
            'first_name.string' => 'Your first name should contain only alphabet and whitespaces',
            'last_name.string' => 'Your last name should contain only alphabet and whitespaces',
            'email_address.email' => 'Enter a valid email address',
            'contact_subject.string' => 'Your subject should contain only alphabet and whitespacese',
            'message.string' => 'Your message should contain only alphabet and whitespaces',
        ];
    }
}
