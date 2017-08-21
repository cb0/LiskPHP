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

namespace Lisk\Api\MultiSignature;

use Lisk\AbstractRequest;
use Lisk\Cli\Parameters;


class CreateAccountRequest extends AbstractRequest
{
    private $secret;
    private $secondSecret;
    private $lifetime;
    private $min;
    private $keysgroup;

    public function __construct($secret, $lifetime, $min, $keygroups, $secondSecret = null)
    {
        parent::__construct();
        $this->secret = $secret;
        $this->secondSecret = $secondSecret;
        $this->lifetime = $lifetime;
        $this->min = $min;
        $this->keysgroup = explode(",", $keygroups);
    }

    public function setEndpoint()
    {
        $this->endpoint = "/api/multisignatures";
    }


    public function setType()
    {
        $this->type = self::PUT;
    }

    public function getPayload()
    {

        $arr = [
            Parameters::SECRET => $this->secret,
            Parameters::LIFETIME => intval($this->lifetime),
            Parameters::MINSIGNATURES => intval($this->min),
            Parameters::KEYSGROUP => $this->keysgroup
        ];

        if ($this->secondSecret !== null) {
            $arr[Parameters::SECOND_SECRET] = $this->secondSecret;
        }

        return $arr;
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
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
    }

    /**
     * @return null
     */
    public function getSecondSecret()
    {
        return $this->secondSecret;
    }

    /**
     * @param null $secondSecret
     */
    public function setSecondSecret($secondSecret)
    {
        $this->secondSecret = $secondSecret;
    }

    /**
     * @return mixed
     */
    public function getLifetime()
    {
        return $this->lifetime;
    }

    /**
     * @param mixed $lifetime
     */
    public function setLifetime($lifetime)
    {
        $this->lifetime = $lifetime;
    }

    /**
     * @return mixed
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @param mixed $min
     */
    public function setMin($min)
    {
        $this->min = $min;
    }

    /**
     * @return mixed
     */
    public function getKeysgroup()
    {
        return $this->keysgroup;
    }

    /**
     * @param mixed $keysgroup
     */
    public function setKeysgroup($keysgroup)
    {
        $this->keysgroup = $keysgroup;
    }


}