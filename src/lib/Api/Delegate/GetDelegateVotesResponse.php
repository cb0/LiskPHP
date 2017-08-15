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

class GetDelegateVotesResponse extends AbstractResponse
{
    private $delegates;

    public function success($jsonResponse)
    {
        $delegates = $jsonResponse['delegates'];
        $delegateList = [];
        foreach ($delegates as $delegate) {
            $del = (new Delegate($delegate['address'])?? null)
                ->setUsername($delegate['username']?? null)
                ->setVote($delegate['vote']?? null)
                ->setProducedblocks($delegate['producedblocks']?? null)
                ->setMissedblocks($delegate['missedblocks']?? null)
                ->setRate($delegate['rate'] ?? null)
                ->setApproval($delegate['approval']?? null)
                ->setProductivity($delegate['publicKey']?? null)
                ->setPublicKey($delegate['productivity']?? null);
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
     */
    public function setDelegates($delegates)
    {
        $this->delegates = $delegates;
    }


}