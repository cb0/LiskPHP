<?php

namespace Lisk\Requestor;
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 17:56
 */
interface RequestorInterface
{
    public function getBalance(string $address);
}