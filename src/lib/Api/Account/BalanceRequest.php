<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Account;

use Lisk\AbstractRequest;


class BalanceRequest extends AbstractRequest
{
    private $address;

    public function __construct($secret)
    {
        parent::__construct();
        $this->address = $secret;
    }

    function setEndpoint()
    {
        $this->endpoint = "api/accounts/getBalance";
    }

    public function getPayload()
    {
        return ['address' => $this->address];
    }

    function setType()
    {
        $this->type = self::GET;
    }
}