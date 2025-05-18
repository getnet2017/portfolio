<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Store message in database
        $message = ContactMessage::create($validated);

        // Send email
        Mail::send('emails.contact', ['data' => $message], function ($mail) use ($message) {
            $mail->to('getnetamare123@gmail.com')
                ->subject('New Contact Message from ' . $message->name);
        });

        return redirect()->route('contact.show')->with('success', 'Message sent successfully!');
    }
}