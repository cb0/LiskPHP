<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Transaction;

use Lisk\AbstractResponse;
use Lisk\Model\QueuedTransaction;
use Lisk\Model\Transaction;

class GetQueuedTransactionResponse extends AbstractResponse
{
    protected $transaction;


    /**
     * @return Transaction
     */
    public function getTransaction(): Transaction
    {
        return $this->transaction;
    }

    /**
     * @param Transaction $transaction
     */
    public function setTransaction(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }


    public function success($jsonResponse)
    {
        $trans = $jsonResponse['transaction'];

        $transaction = new QueuedTransaction();
        $id = $trans['id'];
        $transaction->setId($id);
        $transaction->setHeight($trans['height']);
        $transaction->setBlockId($trans['blockId']);
        $transaction->setType($trans['type']);
        $transaction->setSubtype($trans['subtype']);
        $transaction->setTimestamp($trans['timestamp']);
        $transaction->setSenderPublicKey($trans['senderPublicKey']);
        $transaction->setSenderId($trans['senderId']);
        $transaction->setRecipientId($trans['recipientId']);
        $transaction->setRecipientPublicKey($trans['recipientPublicKey']);
        $transaction->setAmount($trans['amount']);
        $transaction->setFee($trans['fee']);
        $transaction->setSignature($trans['signature']);
        $transaction->setSignatures($trans['signatures']);
        $transaction->setConfirmations($trans['confirmations']);
        $transaction->setAsset($trans['asset']);
        $this->transaction = $transaction;
    }
}