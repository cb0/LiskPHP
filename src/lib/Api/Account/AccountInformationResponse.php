<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
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