<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Servico;

class ServicoController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        $servicos = Servico::all();
        return view('servico.index', compact('servicos'));
    }

    public function edit(Servico $servico) {
        return view('servico.edit', compact('servico'));
    }

    public function update(Request $request, Servico $servico) {
        $servico->update($request->all());
        $servico->save();
        return redirect()->route('servico.index');
    }

}
