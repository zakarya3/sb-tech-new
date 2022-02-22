<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\File;
use App\Models\Brand;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $category = SubCategory::all();
        $brand = Brand::all();
        return view('admin.products.index', compact('products','category','brand'));
    }

    public function insert(Request $request)
    {
        $products = new Product();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/images/',$filename);
            $products->image = $filename;
        }
        if ($request->hasFile('fiche')) {
            $file = $request->file('fiche');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/ficheTechnique/',$filename);
            $products->fiche = $filename;
        }
        $products->cate_id = $request->input('cate_id');
        $products->brand_id = $request->input('brand');
        $products->product_name = $request->input('title');
        $products->product_description = $request->input('description');
        $products->qty = $request->input('qty');
        $products->product_reference = $request->input('ref');
        $products->price = $request->input('price');
        $products->save();
        return redirect('/products')->with('status'," Product Added Successfully");
    }

    public function edit($id)
    {
        $products = Product::find($id);
        $category = SubCategory::all();
        return view('admin.products.edit',compact('products','category'));
    }
    public function update(Request $request, $id)
    {
        $products = Product::find($id);

        if ($request->hasFile('image')) {
            $path = 'assets/uploads/products/images/'.$products->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/images/',$filename);
            $products->image = $filename;
        }
        if ($request->hasFile('fiche')) {
            $path = 'assets/uploads/products/ficheTechnique/'.$products->fiche;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('fiche');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/ficheTechnique/',$filename);
            $products->fiche = $filename;
        }
        if ($request->hasFile('brand')) {
            $path = 'assets/uploads/products/brands/'.$products->product_brand;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('brand');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/brands/',$filename);
            $products->product_brand = $filename;
        }
        $products->cate_id = $request->input('cate_id');
        $products->product_name = $request->input('title');
        $products->product_description = $request->input('description');
        $products->qty = $request->input('qty');
        $products->product_reference = $request->input('ref');
        $products->price = $request->input('price');
        $products->update();
        return redirect('/products')->with('status'," Product Updated Successfully");
    }

    public function destroy($id)
    {
        $products = Product::find($id);
        $path = 'assets/uploads/products/images/'.$products->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $pathf = 'assets/uploads/products/ficheTechnique/'.$products->fiche;
        if (File::exists($pathf)) {
            File::delete($pathf);
        }
        $path1 = 'assets/uploads/products/brands/'.$products->product_brand;
        if (File::exists($path1)) {
            File::delete($path1);
        }
        $products->delete();
        return redirect('/products')->with('status'," Product Deleted Successfully");
    }
}
