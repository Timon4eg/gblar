<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;

class IndexController extends Controller
{
    public function index() {
        return view ('admin.index');
    }

    public function getNewsJson(News $news) {
        return response()->json($news->get())
        ->header('Content-Disposition', 'attachment; filename = "newsjson.json"')
        ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    public function getPict() {
        return response()->download('img/pict.jpg');
    }

    public  function create(Request $request, Category $categories) {
        if($request->isMethod('post')) {
            $request->flash(); // сохраняем данные от пользователя в сессию и доступны они будут только при сделующем редиректе
            return redirect()->route('admin.create');
        }
        return view ('admin.create', [
            'categories' => $categories->get(),
        ]);
    }
}
