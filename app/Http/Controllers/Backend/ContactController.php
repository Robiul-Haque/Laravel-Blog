<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('backend.contact.contact', compact('contacts'));
    }

    public function view($id)
    {
        $contact = Contact::find($id);
        return view('backend.contact.view', compact('contact'));
    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        Toastr::success('Message Delete Successfull', '', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('admin.message.index');
    }
}
