<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MediaSocial;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        $medsos = MediaSocial::all();
        return view("master.contact", compact('contacts', 'medsos'));
    }
}
