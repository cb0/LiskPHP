<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Blocks;

use Lisk\AbstractResponse;

class GetBlockchainHeightResponse extends AbstractResponse
{
    protected $height;

    public function success($response)
    {
        $this->height = $response['height'];
    }
}