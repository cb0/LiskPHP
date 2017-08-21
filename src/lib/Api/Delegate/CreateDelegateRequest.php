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

class CreateDelegateRequest extends AbstractRequest
{

    private $secret;
    private $secondSecret;
    private $username;

    public function __construct($secret, $username, $secondSecret = null)
    {
        parent::__construct();
        $this->secret = $secret;
        $this->username = $username;
        $this->secondSecret = $secondSecret;
    }

    public function setEndpoint()
    {
        $this->endpoint = "/api/delegates";
    }

    public function getPayload()
    {
        $params = [
            Parameters::SECRET => $this->secret,
            Parameters::DELEGATE_USERNAME => $this->username
        ];

        if ($this->secondSecret !== null) {
            $params[Parameters::SECOND_SECRET] = $this->secondSecret;;
        }

        return $params;
    }

    public function setType()
    {
        $this->type = self::PUT;
    }

    /**
     * @return mixed
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param mixed $secret
     * @return CreateDelegateRequest
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSecondSecret()
    {
        return $this->secondSecret;
    }

    /**
     * @param mixed $secondSecret
     * @return CreateDelegateRequest
     */
    public function setSecondSecret($secondSecret)
    {
        $this->secondSecret = $secondSecret;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return CreateDelegateRequest
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }



}