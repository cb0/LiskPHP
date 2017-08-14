<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Blocks;

use Lisk\AbstractRequest;
use Lisk\Cli\Parameters;

class GetBlockRequest extends AbstractRequest
{
    private $id;

    public function __construct($id)
    {
        parent::__construct();
        $this->id = $id;
    }

    function setEndpoint()
    {
        $this->endpoint = "/api/blocks/get";
    }

    public function getPayload()
    {
        return [
            Parameters::ID => $this->id
        ];
    }

    function setType()
    {
        $this->type = self::GET;
    }

}