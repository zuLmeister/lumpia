<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveChatController extends Controller
{
    public function sendChat(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    Mail::to('tujuan@example.com')->send(new LiveChatMail($data));

    return response()->json(['message' => 'Pesan berhasil dikirim!']);
}
}
