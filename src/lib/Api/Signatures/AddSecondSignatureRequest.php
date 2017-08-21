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

namespace Lisk\Api\Signatures;

use Lisk\AbstractRequest;
use Lisk\Cli\Parameters;

class AddSecondSignatureRequest extends AbstractRequest
{
    private $secret;
    private $secondSecret;
    private $publicKey;


    public function __construct($secret, $secondSecret, $publicKey = null)
    {
        parent::__construct();
        $this->secret = $secret;
        $this->secondSecret = $secondSecret;
        $this->publicKey = $publicKey;
    }

    public function setEndpoint()
    {
        $this->endpoint = "/api/signatures";
    }

    public function getPayload()
    {
        $arr = [
            Parameters::SECRET => $this->secret,
            Parameters::SECOND_SECRET => $this->secondSecret,
        ];

        if ($this->publicKey !== null) {
            $arr[Parameters::SENDER_PUBLIC_KEY] = $this->publicKey;
        }

        return $arr;
    }

    public function setType()
    {
        $this->type = self::PUT;
    }
}