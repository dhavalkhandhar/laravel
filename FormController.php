<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function createForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
    
        // Process the form submission, save to database, send email, etc.
    
        $formData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];
    
        return view('success', ['formData' => $formData]);
    }
}    