<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Transaction;

use Lisk\AbstractRequest;


class ListUnconfirmedTransactionsRequest extends AbstractRequest
{

    function setEndpoint()
    {
        $this->endpoint = "/api/transactions/unconfirmed";
    }

    public function getPayload()
    {
        return [];
    }

    function setType()
    {
        $this->type = self::GET;
    }
}