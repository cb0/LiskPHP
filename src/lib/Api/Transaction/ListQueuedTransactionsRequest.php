<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Transaction;

use Lisk\AbstractRequest;


class ListQueuedTransactionsRequest extends AbstractRequest
{

    function setEndpoint()
    {
        $this->endpoint = "/api/transactions/queued";
    }

    public function getPayload()
    {
        return [];
    }


    public function setType()
    {
        $this->type = self::GET;
    }
}