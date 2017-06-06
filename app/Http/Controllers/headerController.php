<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Header;

class headerController extends Controller
{
    public function index() {
        $headers = Header::all();
        return view('header.index', compact('headers'));
    }

    public function edit(Header $header) {
        return view('header.edit', compact('header'));
    }

    public function update(Request $request, Header $header) {
        $header->update($request->all());
        $header->save();
        return redirect()->route('header.index');
    }

}
