<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Mail\Contactdata;

class ContactsController extends Controller
{
    public function index (){
        return view('index');
    }

    public function confirm(ContactRequest $require) {

        $contact = $require;

        $contact = new Contact();
        $contact -> fill($require->all())->save();

        Mail::to('test@gmail.com')->send(new ContactMail($contact));
        Mail::to($contact['email'])->send(new ContactMail($contact));


      return view('complete');
    }

    // public function process(Request $require) {
    //     $action = $require->get('action', 'retun');
    //     $input  = $require->except('action');

    //     if($action === 'submit') {
    //         $contact = new Contact();
    //         $contact = fill($input);
    //         $contact = save();

    //         Mail::to($input['email'])->send(new ContactMail('mails.contact', 'お問い合わせありがとうございます。', $input));

    //         return redirect()->route('complete');
    //     }else{
    //         return redirect()->route('contact')->withInput($input);
    //     }

    //     }

    public function complete(Request $require){

        Contact::create($require->all());

        $require->session()->regenerateToken();

        return view('compele');
    }

}

