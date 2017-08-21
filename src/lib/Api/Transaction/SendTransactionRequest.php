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

namespace Lisk\Api\Transaction;

use Lisk\AbstractRequest;


class SendTransactionRequest extends AbstractRequest
{

    private $secret;
    private $amount;
    private $recipientId;
    private $publicKey;
    private $secondSecret;

    public function setEndpoint()
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