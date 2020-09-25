@extends('layouts.main-layout')

@section('content')
  <h2>STANZE</h2>
  <h2>
    <a href="{{ route('stanze-create') }}">
      NUOVA STANZA
    </a>
  </h2>
  <ol>
    @foreach ($stanze as $stanza)
      <li>
        <a href={{ route('stanze-show', $stanza -> id) }}>
          {{ $stanza -> title}}
        </a>
      </li>
    @endforeach
  </ol>
@endsection
