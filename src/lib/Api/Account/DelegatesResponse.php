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
use Lisk\Model\Delegate;

class DelegatesResponse extends AbstractResponse
{
    private $delegates = [];


    /**
     * @return Delegate[]
     */
    public function getDelegates()
    {
        return $this->delegates;
    }

    public function success($jsonResponse)
    {
        foreach ($jsonResponse['delegates'] as $del) {
            $address = $del['address'];
            $delegate = new Delegate($address);
            $delegate->setUsername($del['username']);
            $delegate->setPublicKey($del['publicKey']);
            $delegate->setVote($del['vote']);
            $delegate->setProducedblocks($del['producedblocks']);
            $delegate->setMissedblocks($del['missedblocks']);
            $delegate->setRank($del['rate']);
            $delegate->setRank($del['rank']);
            $delegate->setApproval($del['approval']);
            $delegate->setProductivity($del['productivity']);
            $this->delegates[$address] = $delegate;
        }
    }
}