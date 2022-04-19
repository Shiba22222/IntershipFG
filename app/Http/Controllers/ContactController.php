<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getContact()
    {
        $getContact = Contact::get();
        return view('contacts.index')->with([
            'getContact' => $getContact,
        ]);
    }
    public function postContact(CreateContactRequest $request)
    {
        $data = $request->validated();
        $postContact = Contact::create($data);
        return redirect()->route('get.getContact');
    }
}
