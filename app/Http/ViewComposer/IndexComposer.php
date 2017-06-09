<?php

namespace App\Http\ViewComposer;

use Illuminate\Contracts\View\View;

use App\Header;
use App\Apresentacao;
use App\Servico;

class IndexComposer {

	protected $header;
	protected $apresentacao;
	protected $servico;
	
	public function __construct(Header $header, Apresentacao $ap, Servico $servico) {
		$this->header = $header;
		$this->apresentacao = $ap;
		$this->servico = $servico;
	}
	
	public function compose(View $view) {
		$view->with('header', $this->header->findOrFail(1));
		$view->with('ap', $this->apresentacao->findOrFail(1));
		$view->with('servico', $this->servico->all());
	}
	
}