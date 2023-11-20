<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        $categories=Category::paginate(5);

        return view('admin.pages.category.list',compact('categories'));
    }
    public function createform()
    {

        return view('admin.pages.category.form');
    }

    public function store(Request $request)

    {

        //  dd($request->all());
         Category::create([
             'category_name'=>$request->name,
             'description'=>$request->description



         ]);
         return redirect()->back();
    }
}

