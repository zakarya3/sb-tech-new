<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use App\Models\Reference;

class RefController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $references = Reference::all();
        return view('admin.reference.index', compact('category','references'));
    }
    public function insert(Request $request)
    {
        $references = new Reference();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/references/images/',$filename);
            $references->image = $filename;
        }
        $references->categ_id = $request->input('categ_id');
        $references->title = $request->input('title');
        $references->description = $request->input('description');
        $references->date = $request->input('date');
        $references->save();
        return redirect('/reference')->with('status'," Ref Added Successfully");
    }

    public function edit($id)
    {
        $references = Reference::find($id);
        $category = Category::all();
        return view('admin.reference.edit',compact('references','category'));
    }
    public function update(Request $request, $id)
    {
        $references = Reference::find($id);

        if ($request->hasFile('image')) {
            $path = 'assets/uploads/references/images/'.$references->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/references/images/',$filename);
            $references->image = $filename;
        }
        $references->categ_id = $request->input('categ_id');
        $references->title = $request->input('title');
        $references->description = $request->input('description');
        $references->date = $request->input('date');
        $references->update();
        return redirect('/reference')->with('status'," Product Updated Successfully");
    }

    public function destroy($id)
    {
        $references = Reference::find($id);
        $path = 'assets/uploads/references/images/'.$references->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $references->delete();
        return redirect('/reference')->with('status'," Ref Deleted Successfully");
    }

}
