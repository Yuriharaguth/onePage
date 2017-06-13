<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contato;

class ContatoController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index() {
        $contato = Contato::all();
        return view('contato.index', compact('contato'));
    }

    public function edit(Contato $contato) {
        return view('contato.edit', compact('contato'));
    }


    public function update(Request $request, Contato $contato) {
        $contato->update($request->all());
        $contato->save();
        return redirect()->route('contato.index');
    }

}
