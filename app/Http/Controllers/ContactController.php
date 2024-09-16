<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }

    public function index()
    {
        $contacts = Contact::query()->when(request()->query('search', '') != '', function ($query) {
            $query->where('name', 'like', '%' . request()->query('search') . '%');
            $query->where('email', 'like', '%' . request()->query('search') . '%');
            $query->where('phone', 'like', '%' . request()->query('search') . '%');
            $query->where('message', 'like', '%' . request()->query('search') . '%');
            return $query;
        })
            ->latest()
            ->paginate();
        return view('admin.contact.index', ['contacts' => $contacts]);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back()->with('success', 'Contact deleted successfully');
    }
}
