<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view("master.contact", compact('contacts'));
    }
}
