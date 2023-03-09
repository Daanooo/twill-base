<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class PostController extends BaseModuleController
{
    protected $moduleName = 'posts';

    protected $previewView = 'site.posts.single';

    protected $indexOptions = [
        'reorder' => true,
    ];

    protected function previewData($item): array
    {
        return [
            'post' => $item
        ];
    }
}
