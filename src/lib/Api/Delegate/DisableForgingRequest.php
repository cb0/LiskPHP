<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Delegate;


class DisableForgingRequest extends EnableForgingRequest
{
    function setEndpoint()
    {
        $this->endpoint = "/api/delegates/forging/disable";
    }
}