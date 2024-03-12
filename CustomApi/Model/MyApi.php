<?php

namespace Tejas\CustomApi\Model;

use Tejas\CustomApi\Api\MyApiInterface;

class MyApi implements MyApiInterface
{
    /**
     * Retrieve custom message
     *
     * @return string
     */
    public function getCustomMessage()
    {
        return "Task Done API Successfully Run";
    }
}
