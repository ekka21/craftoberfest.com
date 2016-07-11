<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVendorsRequest;
use App\Http\Requests\UpdateVendorsRequest;

class VendorsController extends Controller
{
    public function index()
    {
        $vendors = Vendor::all();

        return view('vendors.index', compact('vendors'));
    }

    public function create()
    {
        return view('vendors.create');
    }

    public function store(StoreVendorsRequest $request)
    {
        Vendor::create($request->all());

        return redirect()->route('vendors.index');
    }

    public function edit($id)
    {
        $vendor = Vendor::findOrFail($id);
        return view('vendors.edit',compact('vendor'));
    }

    public function update(UpdateVendorsRequest $request, $id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->update($request->all());

        return redirect()->route('vendors.index');
    }

    public function destroy($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->delete();

        return redirect()->route('vendors.index');
    }
}
