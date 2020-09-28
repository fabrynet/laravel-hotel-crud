@extends('layouts.main-layout')

@section('content')
  <a href="{{ route('hotel.stanze.index') }}">
    Index Stanze
  </a>
  <h2>STANZA {{ $stanza -> room_number }}</h2>
  <ul>
    <li>Piano: {{ $stanza -> floor }}</li>
    <li>Letti: {{ $stanza -> beds }}</li>
  </ul>
@endsection
