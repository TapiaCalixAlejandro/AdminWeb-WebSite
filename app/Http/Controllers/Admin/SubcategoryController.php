<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
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

    public function storeSubcategory(Request $request) {
        $request->validate([
            'name' => 'required|min:5|max:50',
        ]);

        $subcategory = new Subcategory();
        $subcategory->name = $request->get('name');
        $subcategory->save();
        Alert::success('Registro agregado', 'Se registró una nueva subcategoría');
        return redirect(route('admin.subcategory'));
    }
}
