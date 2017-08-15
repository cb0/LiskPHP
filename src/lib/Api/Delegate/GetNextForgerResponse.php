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

use Lisk\AbstractResponse;

class GetNextForgerResponse extends AbstractResponse
{
    private $currentBlock;
    private $currentSlot;
    private $delegates;

    public function success($jsonResponse)
    {
        $this->currentBlock = $jsonResponse['currentBlock'];
        $this->currentSlot = $jsonResponse['currentSlot'];
        $this->delegates = $jsonResponse['delegates'];
    }

    /**
     * @return mixed
     */
    public function getCurrentBlock()
    {
        return $this->currentBlock;
    }

    /**
     * @param mixed $currentBlock
     */
    public function setCurrentBlock($currentBlock)
    {
        $this->currentBlock = $currentBlock;
    }

    /**
     * @return mixed
     */
    public function getCurrentSlot()
    {
        return $this->currentSlot;
    }

    /**
     * @param mixed $currentSlot
     */
    public function setCurrentSlot($currentSlot)
    {
        $this->currentSlot = $currentSlot;
    }

    /**
     * @return mixed
     */
    public function getDelegates()
    {
        return $this->delegates;
    }

    /**
     * @param mixed $delegates
     */
    public function setDelegates($delegates)
    {
        $this->delegates = $delegates;
    }
}