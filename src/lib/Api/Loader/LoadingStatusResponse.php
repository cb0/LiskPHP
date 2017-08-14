<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Loader;

use Lisk\AbstractResponse;

class LoadingStatusResponse extends AbstractResponse
{
    private $loaded;
    private $now;
    private $blocksCount;



    public function success($jsonResponse)
    {
        $this->loaded = $jsonResponse['loaded'];
        $this->now = $jsonResponse['now'];
        $this->blocksCount = $jsonResponse['blocksCount'];
    }
    /**
     * @return mixed
     */
    public function getLoaded()
    {
        return $this->loaded;
    }

    /**
     * @param mixed $loaded
     */
    public function setLoaded($loaded)
    {
        $this->loaded = $loaded;
    }

    /**
     * @return mixed
     */
    public function getNow()
    {
        return $this->now;
    }

    /**
     * @param mixed $now
     */
    public function setNow($now)
    {
        $this->now = $now;
    }

    /**
     * @return mixed
     */
    public function getBlocksCount()
    {
        return $this->blocksCount;
    }

    /**
     * @param mixed $blocksCount
     */
    public function setBlocksCount($blocksCount)
    {
        $this->blocksCount = $blocksCount;
    }

}