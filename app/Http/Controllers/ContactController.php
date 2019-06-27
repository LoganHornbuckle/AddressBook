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
    public function delete($id) {
        
        Contact::find($id)->delete();

        return view('index');

        /* Alternate Approach:

        $sql = 'DELETE FROM App\Contact WHERE id = :id';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->excecute();

        return view('index');
        */
    }
    
}