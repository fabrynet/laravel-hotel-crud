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
    public function create() {
      return view('stanze.create');
    }
    public function store(Request $request) {

      //PRIMA VERSIONE
      // $data = $request -> all(); // restituisce un array associativo con elementi _token, _method e i nomi dei valori passati dal form
      // $stanza = Stanza::create($data); // restituisce un oggetto con la riga inserita

      // SECONDA VERSIONE
      $stanza = new Stanza();
      $stanza -> room_number = $request -> room_number;
      $stanza -> floor = $request -> floor;
      $stanza -> beds = $request -> beds;
      $stanza->save();

      return redirect() -> route('stanze-index');
    }
}
