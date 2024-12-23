<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Kirim email
        try {
            Mail::send([], [], function ($message) use ($validated) {
                $message->to('your-destination-email@example.com') // Ganti dengan email tujuan
                    ->subject($validated['subject'])
                    ->setBody('<p><strong>Email Pengirim:</strong> ' . $validated['email'] . '</p><p>' . nl2br($validated['message']) . '</p>', 'text/html');
            });

            return response()->json(['message' => 'Email berhasil dikirim'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal mengirim email.'], 500);
        }
    }
}