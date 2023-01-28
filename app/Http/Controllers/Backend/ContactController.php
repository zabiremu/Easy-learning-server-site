<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {   
        $jsonData = json_decode($request->getContent(),true);
        $name = $jsonData['name'];
        $email = $jsonData['email'];
        $message = $jsonData['message'];
        $result = Contact::insert([
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ]);
    }

    public function list()
    {
        $result = Contact::latest()->get();
        return view('backend.contact.contactList',compact('result'));
    }
    public function delete($id)
    {
        $result = Contact::find($id);
        $result->delete();
        $notification = [
            'message' => 'Contact Data Successfully Delete',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('contact.lists')
            ->with($notification);
    }
}

