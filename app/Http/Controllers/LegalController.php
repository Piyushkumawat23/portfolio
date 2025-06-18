<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function privacyPolicy()
    {
        return view('legal.privacy');
    }

    public function refundPolicy()
    {
        return view('legal.refund');
    }

    public function termsConditions()
    {
        return view('legal.terms');
    }
}
