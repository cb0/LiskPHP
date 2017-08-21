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


class SearchAppsRequest extends AbstractRequest
{
    private $q;
    private $category;
    private $installed;

    public function __construct($q = null, $category = null, $installed = null)
    {
        parent::__construct();
        $this->q = $q;
        $this->category = $category;
        $this->installed = $installed;
    }

    public function setEndpoint()
    {
        $this->endpoint = "/api/dapps/search";
    }


    public function setType()
    {
        $this->type = self::GET;
    }

    public function getPayload()
    {

        $arr = [

        ];

        if ($this->q !== null) {
            $arr['q'] = $this->q;
        }

        if ($this->category !== null) {
            $arr['category'] = $this->category;
        }

        if ($this->installed !== null) {
            $arr['installed'] = $this->installed;
        }

        return $arr;
    }

    /**
     * @return null
     */
    public function getQ()
    {
        return $this->q;
    }

    /**
     * @param null $q
     */
    public function setQ($q)
    {
        $this->q = $q;
    }

    /**
     * @return null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param null $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return null
     */
    public function getInstalled()
    {
        return $this->installed;
    }

    /**
     * @param null $installed
     */
    public function setInstalled($installed)
    {
        $this->installed = $installed;
    }



}