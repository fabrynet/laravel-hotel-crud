@extends('layouts.main-layout')

@section('content')
  <a href="{{ route('pagamenti.index') }}">Index Pagamenti</a>
  <h1>PAGAMENTO EDIT</h1>
  <form action="{{ route('pagamenti.update', $pagamento -> id) }}" method="post">

    @csrf
    @method('PATCH')

    <div class="form-group">
      <label for="status">Status</label>
      <br>
      <input type="text" name="status" value="{{ $pagamento -> status }}">
    </div>
    <div class="form-group">
      <label for="price">Prezzo</label>
      <br>
      <input type="number" name="price" value="{{ $pagamento -> price }}">
    </div>
    <br><br>
    <button type="submit">EDIT PAGAMENTO</button>
  </form>
@endsection
