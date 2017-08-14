<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Signatures;

use Lisk\AbstractResponse;

class AddSecondSignatureResponse extends AbstractResponse
{
    private $type;
    private $amount;
    private $senderPublicKey;
    private $requesterPublicKey;
    private $timestamp;
    private $assetPubKey;
    private $signature;
    private $publicKey;
    private $recipientId;
    private $id;
    private $fee;
    private $senderId;
    private $relays;
    private $receivedAt;

    public function success($params)
    {
        $transaction = $params['transaction'];

        $this->type = $transaction['type'];
        $this->amount = $transaction['amount'];
        $this->senderPublicKey = $transaction['senderPublicKey'];
        $this->requesterPublicKey = $transaction['requesterPublicKey'];
        $this->timestamp = $transaction['timestamp'];
        $this->assetPubKey = $transaction['assetPubKey'];
        $this->signature = $transaction['signature'];
        $this->publicKey = $transaction['publicKey'];
        $this->recipientId = $transaction['recipientId'];
        $this->id = $transaction['id'];
        $this->fee = $transaction['fee'];
        $this->senderId = $transaction['senderId'];
        $this->relays = $transaction['relays'];
        $this->receivedAt = $transaction['receivedAt'];

    }
}