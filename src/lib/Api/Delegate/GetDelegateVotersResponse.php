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
use Lisk\Model\Voter;
use Lisk\Model\Voters;

class GetDelegateVotersResponse extends AbstractResponse
{

    /** @var Voter[] */
    private $voters;

    public function success($jsonResponse)
    {
        $this->voters = [];

        foreach ($jsonResponse['accounts'] as $delegate) {
            $del = (new Voter($delegate['address']));
            $del->setBalance($delegate['balance'] ?? null)
                ->setUsername($delegate['username'] ?? null)
                ->setPublicKey($delegate['publicKey'] ?? null);
            $this->voters[] = $del;
        }
    }

    /**
     * @return Voter[]
     */
    public function getVoters(): array
    {
        return $this->voters;
    }


}