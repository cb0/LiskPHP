<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Signatures;

use Lisk\AbstractRequest;

class GetSignatureFeeRequest extends AbstractRequest
{


    function setEndpoint()
    {
        $this->endpoint = "/api/signatures/fee";
    }

    public function getPayload()
    {
        return [];
    }

    public function setType()
    {
        $this->type = self::GET;
    }
}