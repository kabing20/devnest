<?php

namespace Module\Common\Services;

use Module\Common\Repositories\LanguageRepository;
use Module\Common\Services;

class LanguageService
{

    use Services;

    public function __construct(LanguageRepository $repository)
    {
        $this->repository = $repository;
    }
}
