<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'message' => ['nullable', 'string'],
        ]);

        // Create a new contact
        $contact = Contact::create($validatedData);

        // You can return a response if needed
        return response()->json(['message' => 'Contact created successfully', 'contact' => $contact]);
    }
}
