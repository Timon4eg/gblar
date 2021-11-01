<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index() {
        $allNews = News::get();
        return view ('news.index', compact('allNews'));
    }

    public function show($id) {
        $news = News::where('id', $id)->first();
        return view ('news.one', compact('news'));
    }
}
