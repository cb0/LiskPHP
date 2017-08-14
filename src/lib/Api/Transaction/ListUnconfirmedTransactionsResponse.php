<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Transaction;

use Lisk\AbstractResponse;
use Lisk\Model\UnconfirmedTransaction;

class ListUnconfirmedTransactionsResponse extends AbstractResponse
{
    private $transactions;


    public function success($jsonResponse)
    {
        $transactions = $jsonResponse['transactions'];

        foreach ($transactions as $trans) {
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

            $this->transactions[$id] = $transaction;
        }
    }
}