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
use Lisk\Cli\Parameters;
use Lisk\Exception\DelegateNotFoundException;
use Lisk\Model\Delegate;

class GetDelegateResponse extends AbstractResponse
{
    private $delegate;


    public function success($jsonResponse)
    {
        $transaction = $jsonResponse['delegate'];

        $del = new Delegate($transaction[Parameters::ADDRESS]);
        $del->setUsername($transaction[Parameters::DELEGATE_USERNAME]);
        $del->setPublicKey($transaction[Parameters::SENDER_PUBLIC_KEY]);
        $del->setVote($transaction['vote']);
        $del->setProducedblocks($transaction['producedblocks']);
        $del->setMissedblocks($transaction['missedblocks']);
        $del->setRate($transaction['rate']);
        $del->setRank($transaction['rank']);
        $del->setApproval($transaction['approval']);
        $del->setProductivity($transaction['productivity']);

        $this->delegate = $del;

    }

    /**
     * @return Delegate
     */
    public function getDelegate()
    {
        return $this->delegate;
    }

    /**
     * @param mixed $delegate
     */
    public function setDelegate($delegate)
    {
        $this->delegate = $delegate;
    }

    protected function error($errorMessage)
    {
        if ($errorMessage === "Delegate not found") {
            throw new DelegateNotFoundException($errorMessage);
        } else {
            parent::error($errorMessage);
        }
    }


}