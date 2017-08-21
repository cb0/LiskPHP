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

class SearchDelegateRequest extends AbstractRequest
{

    private $username;
    private $orderBy;

    public function __construct($username, $orderBy = null)
    {
        parent::__construct();
        $this->username = $username;
        $this->orderBy = $orderBy;
    }

    public function setEndpoint()
    {
        $this->endpoint = "/api/delegates/search";
    }

    public function getPayload()
    {
        $params = [
            'q' => $this->username
        ];

        if ($this->orderBy !== null) {
            $params[Parameters::ORDERBY] = $this->orderBy;;
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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
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
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
    }





}