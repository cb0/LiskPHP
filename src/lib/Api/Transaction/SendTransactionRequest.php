<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Transaction;

use Lisk\AbstractRequest;


class SendTransactionRequest extends AbstractRequest
{

    private $secret;
    private $amount;
    private $recipientId;
    private $publicKey;
    private $secondSecret;

    function setEndpoint()
    {
        $this->endpoint = "/api/transactions";
    }

    public function getPayload()
    {
        $params = [
            'secret' => $this->secret,
            'amount' => intval($this->amount),
            'recipientId' => $this->recipientId,
        ];

        if ($this->publicKey !== null) {
            $params['publicKey'] = $this->publicKey;
        }

        if ($this->secondSecret !== null) {
            $params['secondSecret'] = $this->secondSecret;
        }


        return $params;
    }

    function setType()
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
     * @return SendTransactionRequest
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     * @return SendTransactionRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecipientId()
    {
        return $this->recipientId;
    }

    /**
     * @param mixed $recipientId
     * @return SendTransactionRequest
     */
    public function setRecipientId($recipientId)
    {
        $this->recipientId = $recipientId;
        return $this;
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
     * @return SendTransactionRequest
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
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
     * @return SendTransactionRequest
     */
    public function setSecondSecret($secondSecret)
    {
        $this->secondSecret = $secondSecret;
        return $this;
    }




}