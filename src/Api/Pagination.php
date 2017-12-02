<?php

namespace Fesor\ApiPlayground\Api;

class Pagination
{
    public $first;
    public $after;

    public function __construct(int $first, \DateTime $after)
    {
        $this->first = $first;
        $this->after = $after;
    }
}