<?php

namespace Module\Common\Repositories;


use Module\Common\Models\EventCategory;
use Module\Common\Repository;

class EventCategoryRepository extends Repository
{
    function getModel()
    {
        return EventCategory::class;
    }
}
