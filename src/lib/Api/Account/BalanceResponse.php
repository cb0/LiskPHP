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
namespace Lisk\Api\Account;

use Lisk\AbstractResponse;

class BalanceResponse extends AbstractResponse
{
    private $balance = 0;
    private $unconfirmedBalance = 0;

    public function success($jsonResponse)
    {
        $this->balance = $jsonResponse['balance'];
        $this->unconfirmedBalance = $jsonResponse['unconfirmedBalance'];
    }

    /**
     * @return int
     */
    public function getConfirmedBalance()
    {
        return $this->balance;
    }

    /**
     * @param int $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return int
     */
    public function getUnconfirmedBalance()
    {
        return $this->unconfirmedBalance;
    }


    /**
     * @param int $unconfirmedBalance
     */
    public function setUnconfirmedBalance($unconfirmedBalance)
    {
        $this->unconfirmedBalance = $unconfirmedBalance;
    }
}