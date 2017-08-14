<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Transaction;

use Lisk\AbstractRequest;

class GetTransactionRequest extends AbstractRequest
{
    private $id;

    public function __construct($transactionId)
    {
        parent::__construct();
        $this->id = $transactionId;

    }

    function setEndpoint()
    {
        $this->endpoint = "/api/transactions/get";
    }

    public function getPayload()
    {
        $params = [
            'id' => $this->id
        ];

        return $params;
    }

    function setType()
    {
        $this->type = self::GET;
    }
}