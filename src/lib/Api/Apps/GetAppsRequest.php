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

namespace Lisk\Api\Apps;

use Lisk\AbstractRequest;
use Lisk\Cli\Parameters;


class GetAppsRequest extends AbstractRequest
{


    private $category;
    private $name;
    private $appType;
    private $link;
    private $limit;
    private $offset;
    private $orderBy;

    public function __construct()
    {
        parent::__construct();
    }

    public function setEndpoint()
    {
        $this->endpoint = "/api/dapps";
    }


    public function setType()
    {
        $this->type = self::GET;
    }

    public function getPayload()
    {

        $arr = [
        ];

        if ($this->getCategory() !== null) {
            $arr[Parameters::CATEGORY] = $this->category;
        }
        if ($this->getName() !== null) {
            $arr[Parameters::NAME] = $this->name;
        }
        if ($this->getAppType() !== null) {
            $arr[Parameters::TYPE] = $this->appType;
        }
        if ($this->getLink() !== null) {
            $arr[Parameters::LINK] = $this->link;
        }
        if ($this->getLimit() !== null) {
            $arr[Parameters::LIMIT] = $this->limit;
        }
        if ($this->getOffset() !== null) {
            $arr[Parameters::OFFSET] = $this->offset;
        }
        if ($this->getOrderBy() !== null) {
            $arr[Parameters::ORDERBY] = $this->orderBy;
        }

        return $arr;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAppType()
    {
        return $this->appType;
    }

    /**
     * @param mixed $appType
     */
    public function setAppType($appType)
    {
        $this->appType = $appType;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
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
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
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
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
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
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
    }


}