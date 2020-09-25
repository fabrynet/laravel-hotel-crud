@extends('layouts.main-layout')

@section('content')
  <h2>STANZE</h2>

  <a href="{{ route('stanze-create') }}">
    NUOVA STANZA
  </a>
   
  <h3>Primo Piano</h3>
  @foreach ($stanze as $stanza)
    @if ($stanza -> floor == 1)
      @include('partials.stanze-numbers')
    @endif
  @endforeach
  <h3>Secondo Piano</h3>
  @foreach ($stanze as $stanza)
    @if ($stanza -> floor == 2)
      @include('partials.stanze-numbers')
    @endif
  @endforeach
  <h3>Terzo Piano</h3>
  @foreach ($stanze as $stanza)
    @if ($stanza -> floor == 3)
      @include('partials.stanze-numbers')
    @endif
  @endforeach

@endsection
