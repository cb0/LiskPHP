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

class GetPeerListRequest extends AbstractRequest
{

    private $state;
    private $os;
    private $version;
    private $limit;
    private $offset;
    private $orderBy;

    public function setEndpoint()
    {
        $this->endpoint = "/api/peers";
    }

    public function getPayload()
    {
        $params = [];

        if ($this->state !== null) {
            $params['state'] = $this->state;;
        }
        if ($this->os !== null) {
            $params['os'] = $this->os;;
        }
        if ($this->version !== null) {
            $params['version'] = $this->version;;
        }
        if ($this->limit !== null) {
            $params['limit'] = $this->limit;;
        }
        if ($this->offset !== null) {
            $params['offset'] = $this->offset;;
        }
        if ($this->orderBy !== null) {
            $params['orderBy'] = $this->orderBy;;
        }

        return $params;
    }

    public function setType()
    {
        $this->type = self::GET;
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
     * @return GetBlocksRequest
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
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
     * @return GetBlocksRequest
     */
    public function setOs($os)
    {
        $this->os = $os;
        return $this;
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
     * @return GetBlocksRequest
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param mixed $limit
     * @return GetBlocksRequest
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param mixed $offset
     * @return GetBlocksRequest
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @param mixed $orderBy
     * @return GetBlocksRequest
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }


}