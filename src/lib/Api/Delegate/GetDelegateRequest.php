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

use Lisk\AbstractRequest;
use Lisk\Cli\Parameters;

class GetDelegateRequest extends AbstractRequest
{
    private $username;
    private $publicKey;

    public function setEndpoint()
    {
        $this->endpoint = "/api/delegates/get";
    }

    public function getPayload()
    {
        $params = [
        ];

        if ($this->publicKey !== null) {
            $params[Parameters::SENDER_PUBLIC_KEY] = $this->publicKey;;
        }
        if ($this->username !== null) {
            $params[Parameters::DELEGATE_USERNAME] = $this->username;;
        }

        return $params;
    }

    public function setType()
    {
        $this->type = self::GET;
    }

    /**
     * @return null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param null $username
     * @return GetDelegateRequest
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return null
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * @param null $publicKey
     * @return GetDelegateRequest
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
        return $this;
    }

}