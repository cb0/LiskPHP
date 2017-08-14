<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 13.08.17
 * Time: 18:15
 */

namespace Lisk\Model;


class BlockchainFees
{
    private $send;
    private $vote;
    private $secondsignature;
    private $delegate;
    private $multisignature;
    private $dapp;

    /**
     * @return mixed
     */
    public function getSend()
    {
        return $this->send;
    }

    /**
     * @param mixed $send
     * @return BlockchainFees
     */
    public function setSend($send)
    {
        $this->send = $send;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * @param mixed $vote
     * @return BlockchainFees
     */
    public function setVote($vote)
    {
        $this->vote = $vote;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSecondsignature()
    {
        return $this->secondsignature;
    }

    /**
     * @param mixed $secondsignature
     * @return BlockchainFees
     */
    public function setSecondsignature($secondsignature)
    {
        $this->secondsignature = $secondsignature;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDelegate()
    {
        return $this->delegate;
    }

    /**
     * @param mixed $delegate
     * @return BlockchainFees
     */
    public function setDelegate($delegate)
    {
        $this->delegate = $delegate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMultisignature()
    {
        return $this->multisignature;
    }

    /**
     * @param mixed $multisignature
     * @return BlockchainFees
     */
    public function setMultisignature($multisignature)
    {
        $this->multisignature = $multisignature;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDapp()
    {
        return $this->dapp;
    }

    /**
     * @param mixed $dapp
     * @return BlockchainFees
     */
    public function setDapp($dapp)
    {
        $this->dapp = $dapp;
        return $this;
    }
}
