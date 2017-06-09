<?php

namespace App\Http\ViewComposer;

use Illuminate\Contracts\View\View;

use App\Header;
use App\Apresentacao;
use App\Servico;
use App\Contato;


class IndexComposer {

	protected $header;
	protected $apresentacao;
	protected $servico;
	protected $contato;
	
	public function __construct(Header $header, Apresentacao $ap, Servico $servico, Contato $contato) {
		$this->header = $header;
		$this->apresentacao = $ap;
		$this->servico = $servico;
		$this->contato = $contato;
	}

	
	public function compose(View $view) {
		$view->with('header', $this->header->findOrFail(1));
		$view->with('ap', $this->apresentacao->findOrFail(1));
		$view->with('servico', $this->servico->all());
		$view->with('contato', $this->contato->findOrFail(1));
	}
	
}