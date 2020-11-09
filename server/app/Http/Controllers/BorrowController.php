<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;

class BorrowController extends Controller
{
    public function index()
    {
        return Borrow::all();
    }
    public function show(Borrow $borrow)
    {
        return $borrow;
    }

    public function store(Request $request)
    {
        $borrow = Borrow::create($request->all());

        return response()->json($borrow, 201);
    }

    public function update(Request $request, Borrow $borrow)
    {
        $borrow->update($request->all());

        return response()->json($borrow, 200);
    }
}
