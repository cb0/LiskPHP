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


class Delegate extends Account
{
    private $username;
    private $vote;
    private $producedblocks;
    private $missedblocks;
    private $rate;
    private $rank;
    private $approval;
    private $productivity;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return Delegate
     */
    public function setUsername($username)
    {
        $this->username = $username;
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
     * @return Delegate
     */
    public function setVote($vote)
    {
        $this->vote = $vote;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProducedblocks()
    {
        return $this->producedblocks;
    }

    /**
     * @param mixed $producedblocks
     * @return Delegate
     */
    public function setProducedblocks($producedblocks)
    {
        $this->producedblocks = $producedblocks;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMissedblocks()
    {
        return $this->missedblocks;
    }

    /**
     * @param mixed $missedblocks
     * @return Delegate
     */
    public function setMissedblocks($missedblocks)
    {
        $this->missedblocks = $missedblocks;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param mixed $rate
     * @return Delegate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @param mixed $rank
     * @return Delegate
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApproval()
    {
        return $this->approval;
    }

    /**
     * @param mixed $approval
     * @return Delegate
     */
    public function setApproval($approval)
    {
        $this->approval = $approval;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductivity()
    {
        return $this->productivity;
    }

    /**
     * @param mixed $productivity
     * @return Delegate
     */
    public function setProductivity($productivity)
    {
        $this->productivity = $productivity;
        return $this;
    }



}