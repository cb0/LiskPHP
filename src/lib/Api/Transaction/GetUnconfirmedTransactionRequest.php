<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Transaction;

use Lisk\AbstractRequest;
use Lisk\Cli\Parameters;

class GetUnconfirmedTransactionRequest extends AbstractRequest
{
    private $id;

    public function __construct($id)
    {
        parent::__construct();
        $this->id = $id;
    }

    function setEndpoint()
    {
        $this->endpoint = "/api/transactions/unconfirmed/get";
    }

    public function getPayload()
    {
        return [
            Parameters::ID => $this->id
        ];
    }

    public function setType()
    {
        $this->type = self::GET;

    }
}