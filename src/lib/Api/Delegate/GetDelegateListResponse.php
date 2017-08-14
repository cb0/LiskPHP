<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Delegate;

use Lisk\AbstractResponse;
use Lisk\Model\Delegate;

class GetDelegateListResponse extends AbstractResponse
{
    private $delegates;


    public function success($jsonResponse)
    {
        $delegateList = [];
        $delegates = $jsonResponse['delegates'];
        foreach ($delegates as $delegate) {
            $del = (new Delegate($delegate['address']))
                ->setUsername($delegate['username'])
                ->setVote($delegate['vote'])
                ->setProducedblocks($delegate['producedblocks'])
                ->setMissedblocks($delegate['missedblocks'])
                ->setRate($delegate['rate'])
                ->setApproval($delegate['approval'])
                ->setProductivity($delegate['publicKey'])
                ->setPublicKey($delegate['productivity']);
            $delegateList[] = $del;
        }
        $this->delegates = $delegateList;
    }

    /**
     * @return mixed
     */
    public function getDelegates()
    {
        return $this->delegates;
    }

    /**
     * @param mixed $delegates
     * @return GetDelegateListResponse
     */
    public function setDelegates($delegates)
    {
        $this->delegates = $delegates;
        return $this;
    }


}