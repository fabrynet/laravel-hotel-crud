@extends('layouts.main-layout')

@section('content')
  <a href="{{ route('pagamenti.index') }}">Index Pagamenti</a>
  <h1>PAGAMENTO CREATE</h1>
  <form action="{{ route('pagamenti.store') }}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="status">Status</label>
      <br>
      <input type="text" name="status" value="">
    </div>
    <div class="form-group">
      <label for="price">Prezzo</label>
      <br>
      <input type="number" name="price" value="">
    </div>
    <div class="form-group">
      <label for="prenotazione_id">ID PRENOTAZIONE</label>
      <br>
      <input type="number" name="prenotazione_id" value="6">
    </div>
    <div class="form-group">
      <label for="pagante_id">ID PAGANTE</label>
      <br>
      <input type="number" name="pagante_id" value="4">
    </div>
    <br><br>
    <button type="submit">CREATE PAGAMENTO</button>
  </form>
@endsection
