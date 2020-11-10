<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Inquiry;
use Illuminate\Support\Facades\Mail;

class TestingController extends Controller
{
    public function index()
    {
        $when = now()->addMinutes(2);
        Mail::to("sidiq@aqi.co.id")->queue(new Inquiry());
    }
}
