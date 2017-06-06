<?php

namespace App\Http\ViewComposer;

use Illuminate\Contracts\View\View;

use App\Header;

class IndexComposer {

	protected $header;
	
	public function __construct(Header $header) {
		$this->header = $header;
	}
	
	public function compose(View $view) {
		$view->with('header', $this->header->findOrFail(1));

	}
	
}