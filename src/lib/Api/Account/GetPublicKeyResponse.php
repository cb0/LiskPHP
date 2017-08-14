<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Account;


use Lisk\AbstractResponse;
use Lisk\Response\Exception\AccountNotFoundException;


class GetPublicKeyResponse extends AbstractResponse
{
    private $publicKey = "";

    /**
     * @return string
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * @param string $publicKey
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
    }


    public function success($jsonResponse)
    {
        $this->publicKey = $jsonResponse['publicKey'];
    }
}