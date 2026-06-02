<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(ContactRequest $request): RedirectResponse
    {
        Mail::to(config('mail.from.address'))->send(new ContactFormMail($request->validated()));

        return redirect()->to('/#kontakt')->with('contact_success', true);
    }
}
