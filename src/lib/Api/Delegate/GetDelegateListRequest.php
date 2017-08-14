<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Delegate;

use Lisk\AbstractRequest;
use Lisk\Cli\Parameters;

class GetDelegateListRequest extends AbstractRequest
{

    private $limit;
    private $offset;
    private $orderBy;

    public function __construct($limit =null, $offset = null, $orderBy = null)
    {
        parent::__construct();
        $this->limit = $limit;
        $this->offset = $offset;
        $this->orderBy = $orderBy;
    }

    function setEndpoint()
    {
        $this->endpoint = "/api/delegates";
    }

    public function getPayload()
    {
        $params = [];

        if ($this->limit !== null) {
            $params[Parameters::LIMIT] = $this->limit;
        }

        if ($this->offset !== null) {
            $params[Parameters::OFFSET] = $this->offset;
        }

        if ($this->orderBy !== null) {
            $params[Parameters::LIMIT] = $this->orderBy;
        }

        return $params;
    }

    function setType()
    {
        $this->type = self::GET;
    }

    /**
     * @return null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param null $limit
     * @return GetDelegateListRequest
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return null
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param null $offset
     * @return GetDelegateListRequest
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return null
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @param null $orderBy
     * @return GetDelegateListRequest
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }



}