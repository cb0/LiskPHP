<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
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

    function setEndpoint()
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

    function setType()
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