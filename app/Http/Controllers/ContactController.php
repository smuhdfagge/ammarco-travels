<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Mail\ContactMessageReceived;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(StoreContactMessageRequest $request): RedirectResponse
    {
        $contactMessage = ContactMessage::create($request->safe()->except('website'));

        Mail::to('ammarcotravels@gmail.com')->send(new ContactMessageReceived($contactMessage));

        return redirect()->to(route('home').'#contact')->with('success', 'Thank you. Our team will be in touch shortly.');
    }
}
