<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ChatController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $adminEmail = 'admin@example.com'; // Ganti dengan email admin tujuan

        $data = [
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::send([], [], function ($message) {
            $message->to('recipient@example.com')
                ->subject('Subject Email')
                ->setBody('<h1>Hello, this is a test email!</h1>', 'text/html'); // Use 'text/html' for HTML content
        });

        return response()->json(['message' => 'Email sent successfully!'], 200);
    }
}
