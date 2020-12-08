<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class ClientRoute
{
    public function map(Registrar $router)
    {
        $router->group([
            'prefix' => 'client',
            'middleware' => 'client'
        ], function ($router) {
            // Client
            if (config('system.subconverter.enable')) {
                $router->get('/subscribe', 'Client\\ClientController@subscribe');
            } else {
                // 使用 subconverter 生成订阅
                $router->get('/subscribe', 'Client\\ClientController@subscribeBySubConverter');
            }
            
            // App
            $router->get('/app/config', 'Client\\AppController@config');
            $router->get('/app/getConfig', 'Client\\AppController@getConfig');
            $router->get('/app/getVersion', 'Client\\AppController@getVersion');
        });
    }
}
