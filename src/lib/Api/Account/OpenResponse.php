<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
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