<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVendorsRequest;
use App\Http\Requests\UpdateVendorsRequest;

class ApplyController extends Controller
{
    public function index()
    {
        return view('apply');
    }

    public function store(StoreVendorsRequest $request)
    {
        Vendor::create($request->all());

        return redirect('thankyou');
    }

}
