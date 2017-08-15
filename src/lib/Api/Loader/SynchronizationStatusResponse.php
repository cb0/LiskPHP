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

class SynchronizationStatusResponse extends AbstractResponse
{
    private $syncing;
    private $blocks;
    private $height;
    private $broadhash;
    private $consensus;


    public function success($jsonResponse)
    {
        $this->syncing = $jsonResponse['syncing'];
        $this->blocks = $jsonResponse['blocks'];
        $this->height = $jsonResponse['height'];
        $this->broadhash = $jsonResponse['broadhash'];
        $this->consensus = $jsonResponse['consensus'];
    }

    /**
     * @return mixed
     */
    public function getSyncing()
    {
        return $this->syncing;
    }

    /**
     * @param mixed $syncing
     */
    public function setSyncing($syncing)
    {
        $this->syncing = $syncing;
    }

    /**
     * @return mixed
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * @param mixed $blocks
     */
    public function setBlocks($blocks)
    {
        $this->blocks = $blocks;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getBroadhash()
    {
        return $this->broadhash;
    }

    /**
     * @param mixed $broadhash
     */
    public function setBroadhash($broadhash)
    {
        $this->broadhash = $broadhash;
    }

    /**
     * @return mixed
     */
    public function getConsensus()
    {
        return $this->consensus;
    }

    /**
     * @param mixed $consensus
     */
    public function setConsensus($consensus)
    {
        $this->consensus = $consensus;
    }


}