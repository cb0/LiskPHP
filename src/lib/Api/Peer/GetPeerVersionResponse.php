<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Peer;

use Lisk\AbstractResponse;

class GetPeerVersionResponse extends AbstractResponse
{
    private $version;
    private $build;


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
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * @param mixed $build
     */
    public function setBuild($build)
    {
        $this->build = $build;
    }

    public function success($jsonResponse)
    {
        $this->version = $jsonResponse['version'];
        $this->build = $jsonResponse['build'];
    }
}