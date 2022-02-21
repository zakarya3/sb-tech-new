<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class TypeController extends Controller
{
    public function index()
    {
        $type = SubCategory::all();
        $categorie = Category::all();
        return view('admin.subcategories.index', compact('type','categorie'));
    }
    public function insert(Request $request)
    {
        $type = new SubCategory();
        $type->name = $request->input('name');
        $type->categ_id = $request->input('categ');
        $type->save();
        return redirect('/subcategory')->with('status'," Type Added Successfully");
    }
    public function edit($id)
    {
        $type = SubCategory::find($id);
        $categorie = Category::all();
        return view('admin.subcategories.edit',compact('type','categorie'));
    }
    public function update(Request $request, $id)
    {
        $type = SubCategory::find($id);
        $type->name = $request->input('name');
        $type->categ_id = $request->input('categ');
        $type->update();
        return redirect('/subcategory')->with('status'," Type Updated Successfully");
    }

    public function destroy($id)
    {
        $type = SubCategory::find($id);
        $type->delete();
        return redirect('/subcategory')->with('status'," Type Deleted Successfully");
    }
}
