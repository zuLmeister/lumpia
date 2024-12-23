<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmailMailable;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Data untuk dikirim ke email
        $data = [
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        // Kirim email
        Mail::to($request->input('email'))->send(new SendEmailMailable($data));

        return response()->json(['message' => 'Email berhasil dikirim!']);
    }
}