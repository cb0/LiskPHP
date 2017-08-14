<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Loader;

use Lisk\AbstractResponse;

class SynchronizationStatusResponse extends AbstractResponse
{
    private $syncing;
    private $blocks;
    private $height;
    private $broadhash;
    private $consensus;


    public function success($jsonResponse)
    {
        $this->syncing = $jsonResponse['syncing'];
        $this->blocks = $jsonResponse['blocks'];
        $this->height = $jsonResponse['height'];
        $this->broadhash = $jsonResponse['broadhash'];
        $this->consensus = $jsonResponse['consensus'];
    }

    /**
     * @return mixed
     */
    public function getSyncing()
    {
        return $this->syncing;
    }

    /**
     * @param mixed $syncing
     */
    public function setSyncing($syncing)
    {
        $this->syncing = $syncing;
    }

    /**
     * @return mixed
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * @param mixed $blocks
     */
    public function setBlocks($blocks)
    {
        $this->blocks = $blocks;
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
    public function getBroadhash()
    {
        return $this->broadhash;
    }

    /**
     * @param mixed $broadhash
     */
    public function setBroadhash($broadhash)
    {
        $this->broadhash = $broadhash;
    }

    /**
     * @return mixed
     */
    public function getConsensus()
    {
        return $this->consensus;
    }

    /**
     * @param mixed $consensus
     */
    public function setConsensus($consensus)
    {
        $this->consensus = $consensus;
    }


}