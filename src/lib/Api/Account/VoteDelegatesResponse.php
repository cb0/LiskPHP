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

class VoteDelegatesResponse extends AbstractResponse
{
    private $type;//": "Type of transaction. Integer",
    private $amount;//": "Amount. Integer",
    private $senderPublicKey;//": "Sender public key. String",
    private $requesterPublicKey;//": "Requester public key. String",
    private $timestamp;//": "Time. Integer",
    private $asset;//":{"votes":["+VotedPublickKey", "-RemovedVotePublicKey"]},
    private $recipientId;//": "Recipient address. String",
    private $signature;//": "Signature. String",
    private $signSignature;//": "Sign signature. String",
    private $id;//": "Tx ID. String",
    private $fee;//": "Fee. Integer",
    private $senderId;//": "Sender address. String",
    private $relays;//": "Propagation. Integer",
    private $receivedAt;

    public function success($jsonResponse)
    {
        $transaction = $jsonResponse['transaction'];

        $this->type = $transaction['type'];//": "Type of transaction. Integer",
        $this->amount = $transaction['amount'];//": "Amount. Integer",
        $this->senderPublicKey = $transaction['senderPublicKey'];//": "Sender public key. String",
        $this->requesterPublicKey = $transaction['requesterPublicKey'];//": "Requester public key. String",
        $this->timestamp = $transaction['timestamp'];//": "Time. Integer",
        $this->asset = $transaction['asset']['votes'];//":{"votes":["+VotedPublickKey", "-RemovedVotePublicKey"]},
        $this->recipientId = $transaction['recipientId'];//": "Recipient address. String",
        $this->signature = $transaction['signature'];//": "Signature. String",
        $this->signSignature = $transaction['signSignature'];//": "Sign signature. String",
        $this->id = $transaction['id'];//": "Tx ID. String",
        $this->fee = $transaction['fee'];//": "Fee. Integer",
        $this->senderId = $transaction['senderId'];//": "Sender address. String",
        $this->relays = $transaction['relays'];//": "Propagation. Integer",
        $this->receivedAt = $transaction['receivedAt'];//": "Time. String"
    }//": "Time. String"

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getSenderPublicKey()
    {
        return $this->senderPublicKey;
    }

    /**
     * @return mixed
     */
    public function getRequesterPublicKey()
    {
        return $this->requesterPublicKey;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return mixed
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * @return mixed
     */
    public function getRecipientId()
    {
        return $this->recipientId;
    }

    /**
     * @return mixed
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @return mixed
     */
    public function getSignSignature()
    {
        return $this->signSignature;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @return mixed
     */
    public function getSenderId()
    {
        return $this->senderId;
    }

    /**
     * @return mixed
     */
    public function getRelays()
    {
        return $this->relays;
    }


    /**
     * @return mixed
     */
    public function getReceivedAt()
    {
        return $this->receivedAt;
    }
}