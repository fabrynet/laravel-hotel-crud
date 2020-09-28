<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;

class PagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagamenti = Pagamento::all();
        return view('hotel.pagamenti.index', compact('pagamenti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel.pagamenti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request -> all();
      $pagamento = Pagamento::create($data);
      return redirect() -> route('pagamenti.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $pagamento = Pagamento::FindOrFail($id);
      return view('hotel.pagamenti.show',compact('pagamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pagamento = Pagamento::FindOrFail($id);
      return view('hotel.pagamenti.edit', compact('pagamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $data = $request -> all();
      $pagamento = Pagamento::FindOrFail($id);
      $pagamento -> update($data);
      return redirect() -> route('pagamenti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pagamento = Pagamento::FindOrFail($id);
      $pagamento -> delete();
      return redirect() -> route('pagamenti.index');
    }
}
