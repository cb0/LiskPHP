<?php
/**
 * LiskPhp - A PHP wrapper for the LISK API
 * Copyright (c) 2017  Marcus Puchalla <cb0@0xcb0.com>
 *
 * LiskPhp is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * LiskPhp is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with LiskPhp.  If not, see <http://www.gnu.org/licenses/>.
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
