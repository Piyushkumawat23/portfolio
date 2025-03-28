<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;

class FAQController extends Controller
{


    public function index()
    {
        $faq = FAQ::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.faq.index', compact('faq'));
    }
    


    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save to Database
        FAQ::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Your question has been submitted successfully!');
    }
}
