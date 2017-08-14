<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
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