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

namespace Lisk;


abstract class AbstractRequest
{
    const GET = "GET";
    const POST = "POST";
    const PUT = "PUT";

    protected $endpoint = "";
    protected $type = self::GET;

    public function __construct()
    {
        $this->setEndpoint();
        $this->setType();

        return $this;
    }

    abstract public function getPayload();

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    abstract public function setType();

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    abstract public function setEndpoint();
}