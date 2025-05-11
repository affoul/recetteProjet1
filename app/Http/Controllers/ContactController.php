<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index()
    {
        return view('layouts2.contact'); // Laravel cherche contact.blade.php dans resources/views
    }

    public function submit(Request $request)
    {
        // Traitement ici : validation, envoi email, etc.
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Exemple simple : juste un message flash
        return redirect()->route('contact')->with('success', 'Message envoyé avec succès !');
    }
}
