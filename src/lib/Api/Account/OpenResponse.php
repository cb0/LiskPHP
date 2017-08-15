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

class OpenResponse extends AbstractResponse
{
    /** @var  string */
    private $address;

    /** @var  string */
    private $unconfirmedBalance;

    /** @var  string */
    private $balance;

    /** @var  string */
    private $publicKey;

    /** @var  int */
    private $unconfirmedSignature;

    /** @var  int */
    private $secondSignature;

    /** @var  string */
    private $secondPublicKey;

    /** @var  array */
    private $multisignatures;

    /** @var  array */
    private $u_multisignatures;


    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getUnconfirmedBalance(): string
    {
        return $this->unconfirmedBalance;
    }

    /**
     * @return string
     */
    public function getBalance(): string
    {
        return $this->balance;
    }

    /**
     * @return string
     */
    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    /**
     * @return int
     */
    public function getUnconfirmedSignature(): int
    {
        return $this->unconfirmedSignature;
    }

    /**
     * @return int
     */
    public function getSecondSignature(): int
    {
        return $this->secondSignature;
    }

    /**
     * @return string
     */
    public function getSecondPublicKey(): string
    {
        return $this->secondPublicKey;
    }

    /**
     * @return array
     */
    public function getMultisignatures(): array
    {
        return $this->multisignatures;
    }

    /**
     * @return array
     */
    public function getUMultisignatures(): array
    {
        return $this->u_multisignatures;
    }


    public function success($jsonResponse)
    {
        $account = $jsonResponse['account'];

        $this->address = $account['address'];
        $this->unconfirmedBalance = $account['unconfirmedBalance'];
        $this->balance = $account['balance'];
        $this->publicKey = $account['publicKey'];
        $this->unconfirmedSignature = $account['unconfirmedSignature'];
        $this->secondSignature = $account['secondSignature'];
        $this->secondPublicKey = $account['secondPublicKey'];
        $this->multisignatures = $account['multisignatures'];
        $this->u_multisignatures = $account['u_multisignatures'];
    }
}