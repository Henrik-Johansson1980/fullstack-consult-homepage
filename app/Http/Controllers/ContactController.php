<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactSubmission;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function store(ContactRequest $request): RedirectResponse
    {
        ContactSubmission::create($request->validated());

        return redirect()->to('/#kontakt')->with('contact_success', true);
    }
}
