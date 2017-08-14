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

class GetPeerResponse extends AbstractResponse
{
    protected $peer;

    /**
     * @return Peer
     */
    public function getPeer(): Peer
    {
        return $this->peer;
    }

    /**
     * @param Peer $peer
     */
    public function setPeer(Peer $peer)
    {
        $this->peer = $peer;
    }


    public function success($jsonResponse)
    {
        $pe = $jsonResponse['peer'];

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
        $this->peer = $peer;
    }
}