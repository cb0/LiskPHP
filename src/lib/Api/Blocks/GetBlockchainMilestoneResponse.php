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

class GetBlockchainMilestoneResponse extends AbstractResponse
{
    protected $milestone;

    public function success($jsonResponse)
    {
        $this->milestone = $jsonResponse['milestone'];
    }
}
