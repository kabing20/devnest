<?php

namespace Module\Common\Services;

use Module\Common\Repositories\AdminRepository;
use Module\Common\Services;

class AdminService
{

    use Services;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }
}
