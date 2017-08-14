<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Delegate;

use Lisk\AbstractResponse;

class CreateDelegateResponse extends AbstractResponse
{
    private $type;
    private $amount;
    private $senderPublicKey;
    private $requesterPublicKey;
    private $timestamp;
    private $asset;
    private $recipientId;
    private $signature;
    private $signSignature;
    private $id;
    private $fee;
    private $senderId;
    private $relays;
    private $receivedAt;


    public function success($jsonResponse)
    {
        $transaction = $jsonResponse['transaction'];

        $this->type = $transaction['type'];
        $this->amount = $transaction['amount'];
        $this->senderPublicKey = $transaction['senderPublicKey'];
        $this->requesterPublicKey = $transaction['requesterPublicKey'];
        $this->timestamp = $transaction['timestamp'];
        $this->asset = $transaction['asset'];
        $this->recipientId = $transaction['recipientId'];
        $this->signature = $transaction['signature'];
        $this->signSignature = $transaction['signSignature'];
        $this->id = $transaction['id'];
        $this->fee = $transaction['fee'];
        $this->senderId = $transaction['senderId'];
        $this->relays = $transaction['relays'];
        $this->receivedAt = $transaction['receivedAt'];
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return CreateDelegateResponse
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @return CreateDelegateResponse
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenderPublicKey()
    {
        return $this->senderPublicKey;
    }

    /**
     * @param mixed $senderPublicKey
     * @return CreateDelegateResponse
     */
    public function setSenderPublicKey($senderPublicKey)
    {
        $this->senderPublicKey = $senderPublicKey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRequesterPublicKey()
    {
        return $this->requesterPublicKey;
    }

    /**
     * @param mixed $requesterPublicKey
     * @return CreateDelegateResponse
     */
    public function setRequesterPublicKey($requesterPublicKey)
    {
        $this->requesterPublicKey = $requesterPublicKey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param mixed $timestamp
     * @return CreateDelegateResponse
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * @param mixed $asset
     * @return CreateDelegateResponse
     */
    public function setAsset($asset)
    {
        $this->asset = $asset;
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
     * @return CreateDelegateResponse
     */
    public function setRecipientId($recipientId)
    {
        $this->recipientId = $recipientId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param mixed $signature
     * @return CreateDelegateResponse
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignSignature()
    {
        return $this->signSignature;
    }

    /**
     * @param mixed $signSignature
     * @return CreateDelegateResponse
     */
    public function setSignSignature($signSignature)
    {
        $this->signSignature = $signSignature;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return CreateDelegateResponse
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param mixed $fee
     * @return CreateDelegateResponse
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenderId()
    {
        return $this->senderId;
    }

    /**
     * @param mixed $senderId
     * @return CreateDelegateResponse
     */
    public function setSenderId($senderId)
    {
        $this->senderId = $senderId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelays()
    {
        return $this->relays;
    }

    /**
     * @param mixed $relays
     * @return CreateDelegateResponse
     */
    public function setRelays($relays)
    {
        $this->relays = $relays;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceivedAt()
    {
        return $this->receivedAt;
    }

    /**
     * @param mixed $receivedAt
     * @return CreateDelegateResponse
     */
    public function setReceivedAt($receivedAt)
    {
        $this->receivedAt = $receivedAt;
        return $this;
    }


}