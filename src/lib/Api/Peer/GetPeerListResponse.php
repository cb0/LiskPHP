<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Peer;

use Lisk\AbstractResponse;
use Lisk\Model\Peer;

class GetPeerListResponse extends AbstractResponse
{
    protected $peers;


    /**
     * @return mixed
     */
    public function getPeers()
    {
        return $this->peers;
    }

    /**
     * @param mixed $peers
     */
    public function setPeers($peers)
    {
        $this->peers = $peers;
    }

    public function success($jsonResponse)
    {
        $peers = $jsonResponse['peers'];

        foreach ($peers as $pe) {
            $peer = new Peer();
            $peer->setIp($pe['ip']);
            $peer->setPort($pe['port']);
            $peer->setState($pe['state']);
            $peer->setOs($pe['os']);
            $peer->setVersion($pe['version']);
            $peer->setDappId($pe['dappid']);
            $peer->setBroadhash($pe['broadhash']);
            $peer->setHeight($pe['height']);
            $peer->setClock($pe['clock']);
            $peer->setUpdated($pe['updated']);
            $peer->setNonce($pe['nonce']);
            $this->peers[] = $peers;
        }
    }
}