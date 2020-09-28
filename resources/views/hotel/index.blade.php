@extends('layouts.main-layout')

@section('content')
<h1>
  HOTEL
</h1>
<h2>
  <a href="{{ route('hotel.stanze.index') }}">
    STANZE
  </a>
</h2>
<h2>
  <a href="{{ route('pagamenti.index') }}">
    PAGAMENTI
  </a>
</h2>
@endsection
