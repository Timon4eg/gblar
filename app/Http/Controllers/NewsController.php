<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;

class NewsController extends Controller
{
    public function index() {
        $allNews = News::get();
        $category = Category::get();
        return view ('news.index', [
            'allNews' => $allNews,
            'category' => $category,
    ]);
    }

    public function show($id) {
        $news = News::where('id', $id)->first();
        return view ('news.one', compact('news'));
    }

    public function categories() {
        $categories = Category::get();
        return view ('news.categories', compact('categories'));
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        $newsFromCategory = News::where('category_id', $category->id)->get();
        return view ('news.category', compact('category', 'newsFromCategory'));
    }

}
