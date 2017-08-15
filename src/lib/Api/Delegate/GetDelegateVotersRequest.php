<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Delegate;

use Lisk\AbstractRequest;
use Lisk\Cli\Parameters;

class GetDelegateVotersRequest extends AbstractRequest
{

    private $publicKey;

    public function __construct($publicKey)
    {
        parent::__construct();
        $this->publicKey= $publicKey;
    }

    function setEndpoint()
    {
        $this->endpoint = "/api/delegates/voters?";
    }

    public function getPayload()
    {
        $params = [
            Parameters::SENDER_PUBLIC_KEY => $this->publicKey
        ];

        return $params;
    }

    function setType()
    {
        $this->type = self::GET;
    }

    /**
     * @return mixed
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * @param mixed $publicKey
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
    }





}