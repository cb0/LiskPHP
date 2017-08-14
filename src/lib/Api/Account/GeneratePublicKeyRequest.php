<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Account;

use Lisk\AbstractRequest;


class GeneratePublicKeyRequest extends AbstractRequest
{
    private $secret;

    public function __construct($secret)
    {
        parent::__construct();
        $this->secret = $secret;
    }

    function setEndpoint()
    {
        $this->endpoint = "/api/accounts/generatePublicKey";
    }

    public function getPayload()
    {
        return ['secret' => $this->secret];
    }

    function setType()
    {
        $this->type = self::POST;
    }
}