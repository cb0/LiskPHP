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

class GetBlocksResponse extends AbstractResponse
{
    protected $blocks;

    public function success($jsonResponse)
    {
        $blocks = $jsonResponse['blocks'];
        foreach ($blocks as $bl) {
            $this->blocks[] = (new Block())->fromArray($bl);
        }
    }
}