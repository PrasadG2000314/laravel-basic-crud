<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submitContactForm(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Process the contact form submission (e.g., send an email)
        try {
            Mail::send([], [], function ($message) use ($request) {
                $message->to('support@3dstore.com') // Replace with your email address
                        ->subject($request->subject)
                        ->setBody("Name: {$request->name}\nEmail: {$request->email}\n\nMessage:\n{$request->message}");
            });

            return response()->json(['message' => 'Message sent successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to send message.'], 500);
        }
    }
}
