<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    public function messagesList()
    {
        $messages = DB::table('contacts')->get();
        //($messages); die;

        return view('messages.messagesList')->with(['messages' => $messages]);
    }

    public function delete($id)
    {
        $message = Contact::find($id);
        if ($message) {
            $message->delete();
        }
        
        return redirect()->back()->with('success', "Message supprimé avec succès");
    }
}
