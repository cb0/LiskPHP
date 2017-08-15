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

class EnableForgingRequest extends AbstractRequest
{

    protected $secret;

    public function __construct($secret)
    {
        parent::__construct();
        $this->secret = $secret;
    }

    function setEndpoint()
    {
        $this->endpoint = "/api/delegates/forging/enable";
    }

    public function getPayload()
    {
        return [
            Parameters::SECRET => $this->secret
        ];
    }

    function setType()
    {
        $this->type = self::POST;
    }


}