<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Contact;

class ContactRepository extends ModuleRepository
{
    use HandleBlocks, HandleMedias, HandleFiles;

    public function __construct(Contact $model)
    {
        $this->model = $model;
    }
}
