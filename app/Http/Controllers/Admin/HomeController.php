<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;

class HomeController extends BaseModuleController
{
    protected $moduleName = 'homes';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
