<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmailMailable;

class ChatController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Kirim email menggunakan Mailable
        Mail::to('zulwasrightty@gmail.com')->send(new SendEmailMailable($data));

        return response()->json(['status' => 'success', 'message' => 'Email sent successfully']);
    }
}
