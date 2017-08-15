<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Delegate;

use Lisk\AbstractResponse;

class GetNextForgerResponse extends AbstractResponse
{
    private $currentBlock;
    private $currentSlot;
    private $delegates;

    public function success($jsonResponse)
    {
        $this->currentBlock = $jsonResponse['currentBlock'];
        $this->currentSlot = $jsonResponse['currentSlot'];
        $this->delegates = $jsonResponse['delegates'];
    }

    /**
     * @return mixed
     */
    public function getCurrentBlock()
    {
        return $this->currentBlock;
    }

    /**
     * @param mixed $currentBlock
     */
    public function setCurrentBlock($currentBlock)
    {
        $this->currentBlock = $currentBlock;
    }

    /**
     * @return mixed
     */
    public function getCurrentSlot()
    {
        return $this->currentSlot;
    }

    /**
     * @param mixed $currentSlot
     */
    public function setCurrentSlot($currentSlot)
    {
        $this->currentSlot = $currentSlot;
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