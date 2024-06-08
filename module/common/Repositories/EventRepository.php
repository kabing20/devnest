<?php

namespace Module\Common\Repositories;


use Module\Common\Models\Event;
use Module\Common\Repository;

class EventRepository extends Repository
{
    function getModel()
    {
        return Event::class;
    }
}
