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
use Lisk\Model\Delegate;

class GetForgedByAccountResponse extends AbstractResponse
{
    private $fees;
    private $rewards;
    private $forged;


    public function success($jsonResponse)
    {
        $this->fees = $jsonResponse['fees'];
        $this->rewards = $jsonResponse['rewards'];
        $this->forged = $jsonResponse['forged'];
    }

    /**
     * @return mixed
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * @param mixed $fees
     */
    public function setFees($fees)
    {
        $this->fees = $fees;
    }

    /**
     * @return mixed
     */
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
     * @param mixed $rewards
     */
    public function setRewards($rewards)
    {
        $this->rewards = $rewards;
    }

    /**
     * @return mixed
     */
    public function getForged()
    {
        return $this->forged;
    }

    /**
     * @param mixed $forged
     */
    public function setForged($forged)
    {
        $this->forged = $forged;
    }



}