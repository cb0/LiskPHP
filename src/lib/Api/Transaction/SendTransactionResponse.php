<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Transaction;

use Lisk\AbstractResponse;

class SendTransactionResponse extends AbstractResponse
{
    private $transactionId;

    public function success($jsonResponse)
    {
        $this->transactionId = $jsonResponse['transactionId'];

    }
}