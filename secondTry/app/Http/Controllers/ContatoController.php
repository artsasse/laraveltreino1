<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller {

    public function create()
    {
        return view('contato.create');
    }

    public function store()
    {
    }

}