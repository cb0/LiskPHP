<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Blocks;

use Lisk\AbstractRequest;

class GetBlockchainRewardRequest extends AbstractRequest
{


    function setEndpoint()
    {
        $this->endpoint = "/api/blocks/getReward";
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