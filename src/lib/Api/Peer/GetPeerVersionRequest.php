<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Peer;

use Lisk\AbstractRequest;

class GetPeerVersionRequest extends AbstractRequest
{


    function setEndpoint()
    {
        $this->endpoint = "/api/peers/version";
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