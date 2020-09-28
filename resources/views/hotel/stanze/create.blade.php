@extends('layouts.main-layout')

@section('content')
  <h1>NUOVA STANZA</h1>
    <h2>
      <a href="{{ route ('hotel.stanze.index')}}">
        Index Stanze
      </a>
    </h2>
    <form action="{{ route('hotel.stanza.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="room_number">Numero di stanza</label>
            <br>
            <input type="number" name="room_number" value="">
        </div>
        <div class="form-group">
            <label for="floor">Piano</label>
            <br>
            <input type="number" name="floor" value="">
        </div>
        <div class="form-group">
            <label for="beds">Letti</label>
            <br>
            <input type="number" name="beds" value="">
        </div>
        <br><br>
        <button type="submit">CREA NUOVA STANZA</button>
    </form>
@endsection
