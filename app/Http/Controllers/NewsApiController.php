<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsApiController extends Controller
{
  public function index()
  {
    $news = News::all();
    return response()->json(['message' => 'Sukses', 'news' => $news]);
  }

  public function show($id)
  {
    $news = News::find($id);
    if ($news != null) {
      return response(['message' => 'Retrieved successfully', 'news' => $news], 200);
    } else {
      return response([
        'message' => 'No data found!',
      ], 403);
    }
  }

  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'judul' => 'required|max:200',
      'file' => 'required',
      'deskripsi' => 'required|max:1000',
    ]);

    if ($validator->fails()) {
      return response([
        'error' => $validator->errors(),
        'status' => 'Validation Error'
      ]);
    }

    $news = News::create($request->all());

    return response()->json(['message' => 'Sukses', 'news' => $news], 201);
  }

  public function update(Request $request, $id)
  {
    $validator = Validator::make($request->all(), [
      'judul' => 'required|max:200',
      'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
      'deskripsi' => 'required|max:1000',
    ]);

    if ($validator->fails()) {
      return response([
        'error' => $validator->errors(),
        'status' => 'Validation Error'
      ]);
    }

    $news = News::find($id);

    if ($news != null) {
      $news->update($request->all());
      return response(['message' => 'News has been updated!', 'news' => $news], 202);
    } else {
      return response([
        'message' => 'No data found!',
      ], 403);
    }
  }

  public function destroy($id)
  {
    $news = News::find($id);
    if ($news != null) {
      $news->delete();
      return response(['message' => 'News has been deleted!']);
    } else {
      return response([
        'message' => 'No data found!',
      ], 403);
    }
  }
}
