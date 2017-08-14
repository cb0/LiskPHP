<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Account;

use Lisk\AbstractRequest;


class VoteDelegatesRequest extends AbstractRequest
{
    private $address;

    private $secret;//" : "Secret key of account",
    private $publicKey;//" : "Public key of sender account, to verify secret passphrase in wallet. Optional, only for UI",
    private $secondSecret;//" : "Secret key from second transaction, required if user uses second signature",
    private $delegates = [];//" : "Array of string in the following format: ["+DelegatePublicKey"] OR ["-DelegatePublicKey"]. Use + to UPvote, - to DOWNvote"

    public function __construct($delegates, $secret, $publicKey, $secondSecret)
    {
        parent::__construct();
        $this->secret = $secret;
        $this->publicKey = $publicKey;
        $this->secondSecret = $secondSecret;
        $this->delegates = $delegates;
    }

    function setEndpoint()
    {
        $this->endpoint = "/api/accounts/delegates";
    }

    public function getPayload()
    {
        $arr = [
            'secret' => $this->secret,
            'delegates' => $this->delegates
        ];

        if ($this->secondSecret !== null) {
            $arr['secondSecret'] = $this->secondSecret;
        }

        if ($this->publicKey !== null) {
            $arr['publicKey'] = $this->publicKey;
        }

        return $arr;
    }

    function setType()
    {
        $this->type = self::PUT;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @return mixed
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * @return mixed
     */
    public function getSecondSecret()
    {
        return $this->secondSecret;
    }

    /**
     * @return array
     */
    public function getDelegates(): array
    {
        return $this->delegates;
    }


}