<?php

namespace Module\Common\Services;

use Module\Common\Repositories\GalleryImageRepository;
use Module\Common\Services;

class GalleryImageService
{

    use Services;

    public function __construct(GalleryImageRepository $repository)
    {
        $this->repository = $repository;
    }
}
