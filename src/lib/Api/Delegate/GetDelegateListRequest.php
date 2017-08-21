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

    public function setEndpoint()
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

    public function setType()
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