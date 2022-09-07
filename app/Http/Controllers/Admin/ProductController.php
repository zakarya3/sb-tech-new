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
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'1.'.$ext;
            $file->move('assets/uploads/products/images/',$filename);
            $products->image1 = $filename;
        }
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'2.'.$ext;
            $file->move('assets/uploads/products/images/',$filename);
            $products->image2 = $filename;
        }
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'3.'.$ext;
            $file->move('assets/uploads/products/images/',$filename);
            $products->image3 = $filename;
        }
        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'4.'.$ext;
            $file->move('assets/uploads/products/images/',$filename);
            $products->image4 = $filename;
        }
        if ($request->hasFile('image5')) {
            $file = $request->file('image5');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'5.'.$ext;
            $file->move('assets/uploads/products/images/',$filename);
            $products->image5 = $filename;
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
        $products->trending = $request->input('trending') == TRUE ? '1':'0';
        $products->price = $request->input('price');
        $products->save();
        return redirect('/products')->with('status'," Product Added Successfully");
    }

    public function edit($id)
    {
        $products = Product::find($id);
        $category = SubCategory::all();
        $brand = Brand::all();
        return view('admin.products.edit',compact('products','category','brand'));
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
        if ($request->hasFile('image1')) {
            $path = 'assets/uploads/products/images/'.$products->image1;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'1.'.$ext;
            $file->move('assets/uploads/products/images/',$filename);
            $products->image1 = $filename;
        }
        if ($request->hasFile('image2')) {
            $path = 'assets/uploads/products/images/'.$products->image2;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image2');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'2.'.$ext;
            $file->move('assets/uploads/products/images/',$filename);
            $products->image2 = $filename;
        }
        if ($request->hasFile('image3')) {
            $path = 'assets/uploads/products/images/'.$products->image3;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image3');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'3.'.$ext;
            $file->move('assets/uploads/products/images/',$filename);
            $products->image3 = $filename;
        }
        if ($request->hasFile('image4')) {
            $path = 'assets/uploads/products/images/'.$products->image4;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image4');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'4.'.$ext;
            $file->move('assets/uploads/products/images/',$filename);
            $products->image4 = $filename;
        }
        if ($request->hasFile('image5')) {
            $path = 'assets/uploads/products/images/'.$products->image5;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image5');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'5.'.$ext;
            $file->move('assets/uploads/products/images/',$filename);
            $products->image5 = $filename;
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
        $products->brand_id = $request->input('brand');
        $products->product_name = $request->input('title');
        $products->product_description = $request->input('description');
        $products->qty = $request->input('qty');
        $products->product_reference = $request->input('ref');
        $products->trending = $request->input('trending') == TRUE ? '1':'0';
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
        $path1 = 'assets/uploads/products/images/'.$products->image1;
        if (File::exists($path1)) {
            File::delete($path1);
        }
        $path2 = 'assets/uploads/products/images/'.$products->image2;
        if (File::exists($path2)) {
            File::delete($path2);
        }
        $path3 = 'assets/uploads/products/images/'.$products->image3;
        if (File::exists($path3)) {
            File::delete($path3);
        }
        $path4 = 'assets/uploads/products/images/'.$products->image4;
        if (File::exists($path4)) {
            File::delete($path4);
        }
        $path5 = 'assets/uploads/products/images/'.$products->image5;
        if (File::exists($path5)) {
            File::delete($path5);
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
