@extends('layouts.main-layout')

@section('content')
  <h2>
    <a href="{{ route('hotel.index') }}">INDEX HOTEL</a>
  </h2>

  <h1>PAGAMENTI</h1>

  <h2>
    <a href="{{ route('pagamenti.create') }}">NUOVO PAGAMENTO</a>
  </h2>
  <ul>
    @foreach ($pagamenti as $pagamento)
      <li>
        <form action="{{ route('pagamenti.destroy', $pagamento -> id) }}" method="post">

          @csrf
          @method('DELETE')

          <div class="form-delete">
            <button type="submit">Delete</button>
          </div>
        </form>
        <a href="{{ route('pagamenti.edit',$pagamento -> id) }}">Edit</a>
        <a href="{{ route('pagamenti.show',$pagamento -> id) }}">Show</a>

        {{ $pagamento -> status }}
        {{ $pagamento -> price }}
      </li>
    @endforeach
  </ul>
@endsection
