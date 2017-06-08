<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Apresentacao;

class ApresentacaoController extends Controller
{

    public function index() {
        $apresentacao = Apresentacao::all();
        return view('apresentacao.index', compact('apresentacao'));
    }

    public function edit(Apresentacao $ap) {
        return view('apresentacao.edit', compact('ap'));
    }

    public function update(Request $request, Apresentacao $ap) {
        $ap->update($request->all());
        $ap->save();
        return redirect()->route('apresentacao.index');
    }


}
