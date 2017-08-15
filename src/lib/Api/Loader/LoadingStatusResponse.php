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

namespace Lisk\Api\Loader;

use Lisk\AbstractResponse;

class LoadingStatusResponse extends AbstractResponse
{
    private $loaded;
    private $now;
    private $blocksCount;



    public function success($jsonResponse)
    {
        $this->loaded = $jsonResponse['loaded'];
        $this->now = $jsonResponse['now'];
        $this->blocksCount = $jsonResponse['blocksCount'];
    }
    /**
     * @return mixed
     */
    public function getLoaded()
    {
        return $this->loaded;
    }

    /**
     * @param mixed $loaded
     */
    public function setLoaded($loaded)
    {
        $this->loaded = $loaded;
    }

    /**
     * @return mixed
     */
    public function getNow()
    {
        return $this->now;
    }

    /**
     * @param mixed $now
     */
    public function setNow($now)
    {
        $this->now = $now;
    }

    /**
     * @return mixed
     */
    public function getBlocksCount()
    {
        return $this->blocksCount;
    }

    /**
     * @param mixed $blocksCount
     */
    public function setBlocksCount($blocksCount)
    {
        $this->blocksCount = $blocksCount;
    }

}