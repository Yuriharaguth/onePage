<?php

namespace App\Http\ViewComposer;

use Illuminate\Contracts\View\View;

use App\Header;
use App\Apresentacao;

class IndexComposer {

	protected $header;
	protected $apresentacao;
	
	public function __construct(Header $header, Apresentacao $ap) {
		$this->header = $header;
		$this->apresentacao = $ap;
	}
	
	public function compose(View $view) {
		$view->with('header', $this->header->findOrFail(1));
		$view->with('ap', $this->apresentacao->findOrFail(1));
	}
	
}