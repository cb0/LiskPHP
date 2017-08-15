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

class GetDelegateVotesResponse extends AbstractResponse
{
    private $delegates;

    public function success($jsonResponse)
    {
        $delegates = $jsonResponse['delegates'];
        $delegateList = [];
        foreach ($delegates as $delegate) {
            $del = (new Delegate($delegate['address'])?? null)
                ->setUsername($delegate['username']?? null)
                ->setVote($delegate['vote']?? null)
                ->setProducedblocks($delegate['producedblocks']?? null)
                ->setMissedblocks($delegate['missedblocks']?? null)
                ->setRate($delegate['rate'] ?? null)
                ->setApproval($delegate['approval']?? null)
                ->setProductivity($delegate['publicKey']?? null)
                ->setPublicKey($delegate['productivity']?? null);
            $delegateList[] = $del;
        }
        $this->delegates = $delegateList;
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