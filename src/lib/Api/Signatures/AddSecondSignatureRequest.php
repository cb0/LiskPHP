<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Signatures;

use Lisk\AbstractRequest;
use Lisk\Cli\Parameters;

class AddSecondSignatureRequest extends AbstractRequest
{
    private $secret;
    private $secondSecret;
    private $publicKey;


    public function __construct($secret, $secondSecret, $publicKey = null)
    {
        parent::__construct();
        $this->secret = $secret;
        $this->secondSecret = $secondSecret;
        $this->publicKey = $publicKey;
    }

    function setEndpoint()
    {
        $this->endpoint = "/api/signatures";
    }

    public function getPayload()
    {
        $arr = [
            Parameters::SECRET => $this->secret,
            Parameters::SECOND_SECRET => $this->secondSecret,
        ];

        if ($this->publicKey !== null) {
            $arr[Parameters::SENDER_PUBLIC_KEY] = $this->publicKey;
        }

        return $arr;
    }

    public function setType()
    {
        $this->type = self::PUT;
    }
}