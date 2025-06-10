<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    
     
    public function showForm()
    {
        return view('pages.contact');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    
    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|min:10|max:1000',
        ], [
            'name.required' => 'Please enter your name.',
            'email.required' => 'An email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'message.required' => 'Please enter your message.',
            'message.min' => 'Your message must be at least 10 characters long.',
            'message.max' => 'Your message cannot exceed 1000 characters.',
        ]);

        try {
            ContactSubmission::create($validatedData);
            $successMessage = 'Thank you for your message! We will get back to you shortly.';
        } catch (\Exception $e) {
            Log::error('Error saving contact form submission: ' . $e->getMessage(), $validatedData);
            $successMessage = 'There was an error submitting your message. Please try again later.';
        }
        return redirect()->route('contact.form')->with('success', $successMessage);
    }
}
