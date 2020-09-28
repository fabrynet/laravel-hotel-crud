@extends('layouts.main-layout')

@section('content')
  <a href="{{ route('pagamenti.index') }}">Index Pagamenti</a>
  <h1>PAGAMENTO: {{ $pagamento -> id }}</h1>
  <ul>
    <li>
      STATUS: {{ $pagamento -> status }}
    </li>
    <li>
      PREZZO: {{ $pagamento -> price }}
    </li>
    <li>
      ID PRENOTAZIONE: {{ $pagamento -> prenotazione_id }}
    </li>
    <li>
      ID PAGANTE: {{ $pagamento -> pagante_id }}
    </li>
  </ul>
@endsection
