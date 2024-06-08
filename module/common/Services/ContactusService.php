<?php

namespace Module\Common\Services;

use Module\Common\Repositories\ContactusRepository;
use Module\Common\Services;

class ContactusService
{

    use Services;

    public function __construct(ContactusRepository $repository)
    {
        $this->repository = $repository;
    }
}
