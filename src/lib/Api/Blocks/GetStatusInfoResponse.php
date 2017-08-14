<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
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
