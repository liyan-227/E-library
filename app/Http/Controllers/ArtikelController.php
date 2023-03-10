<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\File;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $news = News::all(); 
    return view('landing.artikel', compact('news'));
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
      'judul' => 'required|max:200',
      'penulis' => 'required|max:200',
      'slug' => Str::slug($request->judul),
      'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
      'deskripsi' => 'required',
    ]);

    $file = $request->file('file');

    $nama_file = time() . "_" . $file->getClientOriginalName();

    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload = 'img';
    $file->move($tujuan_upload, $nama_file);

    News::create([
      'judul' => 'required|max:200',
      'penulis' => 'required|max:200',
      'slug' => Str::slug($request->judul),
      'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
      'deskripsi' => 'required',
    ]);
    return redirect()->route('news.index');

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id) //<<<detail selengkap
  { $post = News::find($id)->get()->toArray();
    $news = News::where("id",$id)->get()->toArray();
    //dd($news,$post);
    return view('landing.artikel',compact('news','post'));
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
      'judul' => 'required|max:200',
      'penulis' => 'required|max:200',
      'slug' => Str::slug($request->judul),
      'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
      'deskripsi' => 'required',
    ]);
    News::findOrFail($id)->update([
      'judul' => $request->judul,
      'slug' => Str::slug($request->judul),
      'file' => $request->file('file')->store('file'),
      'deskripsi' => $request->deskripsi,
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
    $file = News::find($id);
    File::delete('img/' . $file->nama_file);
    $file->delete();
    return redirect()->back();
  }
}
