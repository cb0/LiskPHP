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
use Lisk\Model\Voter;

class GetDelegateVotersResponse extends AbstractResponse
{
    private $voters;

    public function success($jsonResponse)
    {
        $voters = $jsonResponse['accounts'];
        $voterList = [];
        foreach ($voters as $delegate) {
            $del = (new Voter($delegate['address']));
            $del->setBalance($delegate['balance'] ?? null)
                ->setUsername($delegate['username'] ?? null)
                ->setPublicKey($delegate['publicKey'] ?? null);
            $delegateList[] = $del;
        }
        $this->voters = $voterList;
    }

    /**
     * @return mixed
     */
    public function getVoters()
    {
        return $this->voters;
    }

    /**
     * @param mixed $voters
     */
    public function setVoters($voters)
    {
        $this->voters = $voters;
    }


}