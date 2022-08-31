<?php

namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }
    public function insert(Request $request)
    {
        $category = new Category();

        $category->name = $request->input('name');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/categories/images',$filename);
            $category->image = $filename;
        }
        $category->save();
        return redirect('/categories')->with('status'," Category Added Successfully");
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->input('name');
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/categories/images'.$category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/categories/images',$filename);
            $category->image = $filename;
        }
        $category->update();
        return redirect('/categories')->with('status'," Category Updated Successfully");
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories')->with('status'," Category Deleted Successfully");
    }
}
