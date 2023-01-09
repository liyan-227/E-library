<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $news = News::all();
    return view('news.index', compact('news'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('news.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'pelanggan' => 'required|max:200',
      'barang' => 'required|max:500',
      'transaksi' => 'required|max:1000',
    ]);
    News::create($request->all());
    return redirect()->route('news.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $news = News::findOrFail($id);
    return view('news.edit', compact('news'));
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
    $request->validate([
      'pelanggan' => 'required|max:200',
      'barang' => 'required|max:500',
      'transaksi' => 'required|max:1000',
    ]);
    News::findOrFail($id)->update([
      'pelanggan' => $request->pelanggan,
      'barang' => $request->barang,
      'transaksi' => $request->transaksi,
    ]);
    return redirect()->route('news.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    News::findOrFail($id)->delete();
    return redirect()->back();
  }
}
