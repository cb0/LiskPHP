<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 13.08.17
 * Time: 14:43
 */

namespace Lisk\Model;


class Peer
{
    private $ip;
    private $port;
    private $state;
    private $os;
    private $version;
    private $dappId;
    private $clock;
    private $nonce;
    private $broadhash;
    private $height;
    private $updated;

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }



    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * @param mixed $os
     */
    public function setOs($os)
    {
        $this->os = $os;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
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
    public function getDappId()
    {
        return $this->dappId;
    }

    /**
     * @param mixed $dappId
     */
    public function setDappId($dappId)
    {
        $this->dappId = $dappId;
    }

    /**
     * @return mixed
     */
    public function getClock()
    {
        return $this->clock;
    }

    /**
     * @param mixed $clock
     */
    public function setClock($clock)
    {
        $this->clock = $clock;
    }

    /**
     * @return mixed
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * @param mixed $nonce
     */
    public function setNonce($nonce)
    {
        $this->nonce = $nonce;
    }

}