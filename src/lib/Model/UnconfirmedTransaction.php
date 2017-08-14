<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 12.08.17
 * Time: 18:30
 */

namespace Lisk\Model;


class UnconfirmedTransaction extends Transaction
{
    private $relays;
    private $receivedAt;

    /**
     * @return mixed
     */
    public function getRelays()
    {
        return $this->relays;
    }

    /**
     * @param mixed $relays
     */
    public function setRelays($relays)
    {
        $this->relays = $relays;
    }

    /**
     * @return mixed
     */
    public function getReceivedAt()
    {
        return $this->receivedAt;
    }

    /**
     * @param mixed $receivedAt
     */
    public function setReceivedAt($receivedAt)
    {
        $this->receivedAt = $receivedAt;
    }


}