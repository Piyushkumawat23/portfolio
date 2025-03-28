<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{


    
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }
        

    public function store(Request $request)
    {
        $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'budget-range' => 'required|string',
            'message' => 'required|string',
        ]);

        Contact::create([
            'first_name' => $request->f_name,
            'last_name' => $request->l_name,
            'email' => $request->email,
            'budget_range' => $request->{'budget-range'},
            'message' => $request->message,
        ]);

        return back()->with('success', 'Message sent successfully!');
    }
}
