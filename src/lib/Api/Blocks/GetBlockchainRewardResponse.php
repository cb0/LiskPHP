<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Blocks;

use Lisk\AbstractResponse;
use Lisk\Model\BlockchainFees;

class GetBlockchainRewardResponse extends AbstractResponse
{
    protected $reward;

    public function success($jsonResponse)
    {
        $this->reward = $jsonResponse['reward'];
    }
}
