<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Faq;
use Module\Common\Repository;

class FaqRepository extends Repository
{
    function getModel()
    {
        return Faq::class;
    }
}
