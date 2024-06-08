<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Language;
use Module\Common\Repository;

class LanguageRepository extends Repository
{
    function getModel()
    {
        return Language::class;
    }
}
