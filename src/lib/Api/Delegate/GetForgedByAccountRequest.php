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

class GetForgedByAccountRequest extends AbstractRequest
{
    private $generatorPublicKey;
    private $start;
    private $end;

    public function __construct($generatorPublicKey, $start = null, $end = null)
    {
        parent::__construct();
        $this->generatorPublicKey=$generatorPublicKey;
        $this->start=$start;
        $this->end=$end;
    }

    function setEndpoint()
    {
        $this->endpoint = "/api/delegates/forging/getForgedByAccount";
    }

    public function getPayload()
    {
        $payload = [
            Parameters::GENERATORPUBLICKEY => $this->generatorPublicKey
        ];

        return $payload;
    }

    function setType()
    {
        $this->type = self::GET;
    }



}