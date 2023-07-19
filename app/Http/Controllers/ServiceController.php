<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('service.index', [
            'categories' => Category::get(),
            'services' => Service::latest()->get(),
        ]);
    }
    public function store(Request $request)
    {
        Service::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'unit' => $request->unit,
        ]);

        return back()->with('success', 'Created service successfully');
    }

    public function show($id)
    {
        return view('service.show',[
            'service' => Service::whereId($id)->first(),
            'categories' => Category::get(),
        ]);
    }
}
