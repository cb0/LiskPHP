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

class GetBlockchainFeesResponse extends AbstractResponse
{
    protected $fees;

    public function success($jsonResponse)
    {
        $fees = $jsonResponse['fees'];
        $this->fees = (new BlockchainFees())
            ->setSend($fees['send'])
            ->setVote($fees['vote'])
            ->setSecondsignature($fees['secondsignature'])
            ->setDelegate($fees['delegate'])
            ->setMultisignature($fees['multisignature'])
            ->setDapp($fees['dapp']);
    }
}
