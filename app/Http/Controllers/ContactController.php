<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {

    /** 
     * Display contact form.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function show(Request $request) {
      return view('contact.contact');
    }

    /**
     * Handle contact request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function handle(ContactRequest $request) {

        //  Store data in database
        Contact::create($request->validated());
        
        return back()->with('success', 'Nous avons reçu votre message and vous remercions de nous avoir écrit.');
    }
}
