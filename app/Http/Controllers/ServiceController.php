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

    public function update(Request $request, $id)
    {
        Service::whereId($id)->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'unit' => $request->unit,
        ]);
        return redirect()->route('services')->with('success', 'Updated service successfully');
    }

    public function destroy($id)
    {
        Service::whereId($id)->delete();
        return back()->with('success', 'Deleted service successfully');

    }
}
