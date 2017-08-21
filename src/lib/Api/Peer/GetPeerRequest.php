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

use Lisk\AbstractRequest;

class GetPeerRequest extends AbstractRequest
{

    private $ip;
    private $port;

    public function __construct($ip, $port = 8000)
    {
        parent::__construct();
        $this->ip = $ip;
        $this->port = $port;
    }

    public function setEndpoint()
    {
        $this->endpoint = "/api/peers/get";
    }

    public function getPayload()
    {
        return [
            'ip' => $this->ip,
            'port' => $this->port
        ];
    }

    public function setType()
    {
        $this->type = self::GET;
    }
}