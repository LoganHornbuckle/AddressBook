<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\SQLiteDelete as SQLiteDelete;
use App\Contact;

class ContactController extends Controller
{
    // method to create a new contact
    public function create(Request $request) {

        $f_name = $request['f_name'];
        $l_name = $request['l_name'];
        $address = $request['address'];

        $contact = new Contact();

        $contact->f_name=$f_name;
        $contact->l_name=$l_name;
        $contact->address=$address;

        $contact->save();

        return redirect()->back();
    }
    
    // method to show all contacts
    public function show() {
        $contacts = Contact::all();

        return view('index',['contacts'=>$contacts]);
    }

    // method to delete a selected contact
    public function delete(Request $request) {
       
        Contact::where('id',$request->id)->delete();
        
        return redirect()->back();
    }
    
}
