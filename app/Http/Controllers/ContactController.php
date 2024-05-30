<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function showPage(){
        return view('contatti');
    }
    public function save(Request $request){

        if($request->name==null || $request->email==null || $request->message==null){
            return redirect()->back()->with(['error'=>'Compila correttamente i campi!']);
        }

        $mail=new ContactMail($request->name,$request->email,$request->message);
        Mail::to('mail@mail.it')->send($mail);
    }
    public function thankYouPage(){
        return view('response');
    }
}
