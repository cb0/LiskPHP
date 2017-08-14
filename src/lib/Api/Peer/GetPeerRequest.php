<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Peer;

use Lisk\AbstractRequest;

class GetPeerRequest extends AbstractRequest
{

    private $ip;
    private $port;

    public function __construct($ip, $port = 8000)
    {
        parent::__construct();
        $this->ip = $ip;
        $this->port = $port;
    }

    function setEndpoint()
    {
        $this->endpoint = "/api/peers/get";
    }

    public function getPayload()
    {
        return [
            'ip' => $this->ip,
            'port' => $this->port
        ];
    }

    function setType()
    {
        $this->type = self::GET;
    }
}