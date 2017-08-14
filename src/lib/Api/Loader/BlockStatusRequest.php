<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Loader;

use Lisk\AbstractRequest;


class BlockStatusRequest extends AbstractRequest
{

    public function __construct()
    {
        parent::__construct();
    }

    function setEndpoint()
    {
        $this->endpoint = "/api/loader/status/ping";
    }

    public function getPayload()
    {
        return [];
    }

    function setType()
    {
        $this->type = self::GET;
    }
}