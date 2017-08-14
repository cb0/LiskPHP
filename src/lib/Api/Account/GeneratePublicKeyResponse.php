<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Account;

use Lisk\AbstractResponse;

class GeneratePublicKeyResponse extends AbstractResponse
{
    /** @var  string */
    private $publicKey;


    public function success($jsonResponse)
    {
        $this->publicKey = $jsonResponse['publicKey'];
    }


    /**
     * @return string
     */
    public function getPublicKey(): string
    {
        return $this->publicKey;
    }
}