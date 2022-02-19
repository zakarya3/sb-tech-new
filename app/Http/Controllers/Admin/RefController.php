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

}
