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

use Lisk\AbstractRequest;


class VoteDelegatesRequest extends AbstractRequest
{
    private $address;

    private $secret;//" : "Secret key of account",
    private $publicKey;//" : "Public key of sender account, to verify secret passphrase in wallet. Optional, only for UI",
    private $secondSecret;//" : "Secret key from second transaction, required if user uses second signature",
    private $delegates = [];//" : "Array of string in the following format: ["+DelegatePublicKey"] OR ["-DelegatePublicKey"]. Use + to UPvote, - to DOWNvote"

    public function __construct($delegates, $secret, $publicKey, $secondSecret)
    {
        parent::__construct();
        $this->secret = $secret;
        $this->publicKey = $publicKey;
        $this->secondSecret = $secondSecret;
        $this->delegates = $delegates;
    }

    public function setEndpoint()
    {
        $this->endpoint = "/api/accounts/delegates";
    }

    public function getPayload()
    {
        $arr = [
            'secret' => $this->secret,
            'delegates' => $this->delegates
        ];

        if ($this->secondSecret !== null) {
            $arr['secondSecret'] = $this->secondSecret;
        }

        if ($this->publicKey !== null) {
            $arr['publicKey'] = $this->publicKey;
        }

        return $arr;
    }

    public function setType()
    {
        $this->type = self::PUT;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @return mixed
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * @return mixed
     */
    public function getSecondSecret()
    {
        return $this->secondSecret;
    }

    /**
     * @return array
     */
    public function getDelegates(): array
    {
        return $this->delegates;
    }


}