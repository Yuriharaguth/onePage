<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Http\Controllers';

    public function boot(Router $router)
    {
        $router->model('header','App\Header');
        $router->model('apresentacao','App\Apresentacao');
        $router->model('servico','App\Servico');
        $router->model('contato', 'App\Contato');
        $router->model('servicosimg', 'App\ServicoImg');
        parent::boot($router);
    }

    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
