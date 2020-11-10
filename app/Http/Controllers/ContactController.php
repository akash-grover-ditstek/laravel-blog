<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Mails\InquiryRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Inquiry;

class ContactController extends Controller
{
    public function form()
    {
        return view('front.contact.form');
    }

    public function send(InquiryRequest $request)
    {
        try {
            Mail::to(config('mail.from.address'))->queue(new Inquiry($request));
            return redirect()->route('inquiry.form')->with('success', 'Success. Inquiry mail has been sent');
        } catch (\Exception $e) {
            return redirect()->route('inquiry.form')->withErrors('Failed. please try again');
        }
    }
}
