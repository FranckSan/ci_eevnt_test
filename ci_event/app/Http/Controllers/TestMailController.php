<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function test_mail()
    {
        Mail::to('test@mail.test')->send(new TestMail());

        return view('email.test_mail');
    }
}
