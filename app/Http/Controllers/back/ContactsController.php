<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function store(ContactRequest $request)
    {
        Contact::firstOrCreate($request->except('_token'));
        return redirect()->route('homepage');
    }
}
