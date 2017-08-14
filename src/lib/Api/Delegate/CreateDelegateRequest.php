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

class CreateDelegateRequest extends AbstractRequest
{

    private $secret;
    private $secondSecret;
    private $username;

    public function __construct($secret, $username, $secondSecret = null)
    {
        parent::__construct();
        $this->secret = $secret;
        $this->username = $username;
        $this->secondSecret = $secondSecret;
    }

    function setEndpoint()
    {
        $this->endpoint = "/api/delegates";
    }

    public function getPayload()
    {
        $params = [
            Parameters::SECRET => $this->secret,
            Parameters::DELEGATE_USERNAME => $this->username
        ];

        if ($this->secondSecret !== null) {
            $params[Parameters::SECOND_SECRET] = $this->secondSecret;;
        }

        return $params;
    }

    function setType()
    {
        $this->type = self::PUT;
    }

    /**
     * @return mixed
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param mixed $secret
     * @return CreateDelegateRequest
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSecondSecret()
    {
        return $this->secondSecret;
    }

    /**
     * @param mixed $secondSecret
     * @return CreateDelegateRequest
     */
    public function setSecondSecret($secondSecret)
    {
        $this->secondSecret = $secondSecret;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return CreateDelegateRequest
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }



}