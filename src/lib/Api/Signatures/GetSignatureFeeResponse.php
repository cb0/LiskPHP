<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Signatures;

use Lisk\AbstractResponse;

class GetSignatureFeeResponse extends AbstractResponse
{
    protected $fee;

    public function success($jsonResponse)
    {
        $this->fee = $jsonResponse['fee'];
    }
}