<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Transaction;

use Lisk\AbstractResponse;
use Lisk\Api\Peer\GetPeerListResponse;
use Lisk\Model\UnconfirmedTransaction;

class GetUnconfirmedTransactionResponse extends AbstractResponse
{


    public function success($jsonResponse)
    {
        $trans = $jsonResponse['transaction'];

        $transaction = new UnconfirmedTransaction();
        $id = $trans['id'];
        $transaction->setType($trans['type']);
        $transaction->setAmount($trans['amount']);
        $transaction->setSenderPublicKey($trans['senderPublicKey']);
        $transaction->setTimestamp($trans['timestamp']);
        $transaction->setAsset($trans['asset']);
        $transaction->setRecipientId($trans['recipientId']);
        $transaction->setSignature($trans['signature']);
        $transaction->setId($id);
        $transaction->setFee($trans['fee']);
        $transaction->setSenderId($trans['senderId']);
        $transaction->setRelays($trans['relays']);
        $transaction->setReceivedAt($trans['receivedAt']);
        $this->transaction = $transaction;

    }
}