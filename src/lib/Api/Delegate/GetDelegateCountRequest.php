<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Delegate;

use Lisk\AbstractRequest;
use Lisk\Cli\Parameters;

class GetDelegateCountRequest extends AbstractRequest
{


    function setEndpoint()
    {
        $this->endpoint = "/api/delegates/count";
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