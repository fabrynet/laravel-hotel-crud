<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stanza;

class ControllerStanza extends Controller
{
    public function index() {
      $stanze = Stanza::all();
      return view('stanze.index', compact('stanze'));
    }
    public function show($id) {
      $stanza = Stanza::findOrFail($id);
      return view('stanze.show', compact('stanza'));
    }
}
