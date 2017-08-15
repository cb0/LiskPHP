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