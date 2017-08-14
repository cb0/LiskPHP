<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Blocks;

use Lisk\AbstractResponse;
use Lisk\Model\Block;

class GetBlockResponse extends AbstractResponse
{
    protected $block;

    public function success($jsonResponse)
    {
        $this->block = (new Block())->fromArray($jsonResponse['block']);
    }
}