<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ServicoImg;

class ServicoImgController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index() {
        $servicoImg = ServicoImg::all();
        return view('servicosimg.index', compact('servicoImg'));
    }

    public function edit(ServicoImg $servicoImg) {
        return view('servicosimg.edit', compact('servicoImg'));
    }

    public function update(Request $request, ServicoImg $servicoImg) {
        $servicoImg->update($request->all());
        $servicoImg->save();
        return redirect()->route('servicosimg.index');
    }

}
