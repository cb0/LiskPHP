<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Account;

use Lisk\AbstractResponse;
use Lisk\Model\Delegate;

class DelegatesResponse extends AbstractResponse
{
    private $delegates = [];


    /**
     * @return Delegate[]
     */
    public function getDelegates()
    {
        return $this->delegates;
    }

    public function success($jsonResponse)
    {
        foreach ($jsonResponse['delegates'] as $del) {
            $address = $del['address'];
            $delegate = new Delegate($address);
            $delegate->setUsername($del['username']);
            $delegate->setPublicKey($del['publicKey']);
            $delegate->setVote($del['vote']);
            $delegate->setProducedblocks($del['producedblocks']);
            $delegate->setMissedblocks($del['missedblocks']);
            $delegate->setRank($del['rate']);
            $delegate->setRank($del['rank']);
            $delegate->setApproval($del['approval']);
            $delegate->setProductivity($del['productivity']);
            $this->delegates[$address] = $delegate;
        }
    }
}