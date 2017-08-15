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

class AccountInformationResponse extends AbstractResponse
{
    private $address;
    private $unconfirmedBalance;
    private $balance;
    private $publicKey;
    private $unconfirmedSignature;
    private $secondSignature;
    private $multisignatures;
    private $u_multisignatures;


    public function success($jsonResponse)
    {
        $account = $jsonResponse['account'];

        $this->address = $account['address'];
        $this->unconfirmedBalance = $account['unconfirmedBalance'];
        $this->balance = $account['balance'];
        $this->publicKey = $account['publicKey'];
        $this->unconfirmedSignature = $account['unconfirmedSignature'];
        $this->secondSignature = $account['secondSignature'];
        $this->multisignatures = $account['multisignatures'];
        $this->u_multisignatures = $account['u_multisignatures'];
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
    public function getUnconfirmedBalance()
    {
        return $this->unconfirmedBalance;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
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
    public function getUnconfirmedSignature()
    {
        return $this->unconfirmedSignature;
    }

    /**
     * @return mixed
     */
    public function getSecondSignature()
    {
        return $this->secondSignature;
    }

    /**
     * @return mixed
     */
    public function getMultisignatures()
    {
        return $this->multisignatures;
    }

    /**
     * @return mixed
     */
    public function getUMultisignatures()
    {
        return $this->u_multisignatures;
    }

}