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


class SignPendingTransactionRequest extends AbstractRequest
{
    private $publicKey;
    private $transactionId;
    private $secret;

    public function __construct($secret, $transactionId, $publicKey)
    {
        parent::__construct();
        $this->secret = $secret;
        $this->transactionId = $transactionId;
        $this->publicKey = $publicKey;
    }

    public function setEndpoint()
    {
        $this->endpoint = "/api/multisignatures/sign";
    }


    public function setType()
    {
        $this->type = self::POST;
    }

    public function getPayload()
    {

        $arr = [
            Parameters::SECRET => $this->secret,
            Parameters::TRANSACTIONID => $this->transactionId
        ];

        if ($this->publicKey !== null) {
            $arr[Parameters::SENDER_PUBLIC_KEY] = $this->publicKey;
        }
        return $arr;
    }

    /**
     * @return mixed
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * @param mixed $publicKey
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
    }


}