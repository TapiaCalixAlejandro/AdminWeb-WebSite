<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    public function subcategory() {
        $subcategory = Subcategory::all();
        return view('admin.subcategory.index', compact('subcategory'));
    }

    public function create() {
        return view('admin.subcategory.create');
    }
}
