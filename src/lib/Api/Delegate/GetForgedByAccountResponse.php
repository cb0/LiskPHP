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

class GetForgedByAccountResponse extends AbstractResponse
{
    private $fees;
    private $rewards;
    private $forged;


    public function success($jsonResponse)
    {
        $this->fees = $jsonResponse['fees'];
        $this->rewards = $jsonResponse['rewards'];
        $this->forged = $jsonResponse['forged'];
    }

    /**
     * @return mixed
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * @param mixed $fees
     */
    public function setFees($fees)
    {
        $this->fees = $fees;
    }

    /**
     * @return mixed
     */
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
     * @param mixed $rewards
     */
    public function setRewards($rewards)
    {
        $this->rewards = $rewards;
    }

    /**
     * @return mixed
     */
    public function getForged()
    {
        return $this->forged;
    }

    /**
     * @param mixed $forged
     */
    public function setForged($forged)
    {
        $this->forged = $forged;
    }



}