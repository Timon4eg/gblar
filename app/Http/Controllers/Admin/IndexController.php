<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class IndexController extends Controller
{
    public function index() {
        return view ('admin.index');
    }

    public function test1() {
        return view ('admin.test1');
    }

    public function test2() {
        return view ('admin.test2');
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
