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
namespace Lisk\Api\Blocks;

use Lisk\AbstractResponse;

class GetStatusInfoResponse extends AbstractResponse
{
    private $success;
    private $height;
    private $fee;
    private $milestone;
    private $reward;
    private $supply;

    public function success($jsonResponse)
    {
        $this->height = $jsonResponse['height'];
        $this->fee = $jsonResponse['fee'];
        $this->milestone = $jsonResponse['milestone'];
        $this->reward = $jsonResponse['reward'];
        $this->supply = $jsonResponse['supply'];
    }

    /**
     * @return mixed
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param mixed $success
     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param mixed $fee
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
    }

    /**
     * @return mixed
     */
    public function getMilestone()
    {
        return $this->milestone;
    }

    /**
     * @param mixed $milestone
     */
    public function setMilestone($milestone)
    {
        $this->milestone = $milestone;
    }

    /**
     * @return mixed
     */
    public function getReward()
    {
        return $this->reward;
    }

    /**
     * @param mixed $reward
     */
    public function setReward($reward)
    {
        $this->reward = $reward;
    }

    /**
     * @return mixed
     */
    public function getSupply()
    {
        return $this->supply;
    }

    /**
     * @param mixed $supply
     */
    public function setSupply($supply)
    {
        $this->supply = $supply;
    }


}
