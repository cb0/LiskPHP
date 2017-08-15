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

class GetNextForgerRequest extends AbstractRequest
{

    private $limit;

    public function __construct($limit =null)
    {
        parent::__construct();
        $this->limit = $limit;
    }

    function setEndpoint()
    {
        $this->endpoint = "/api/delegates/getNextForgers";
    }

    public function getPayload()
    {
        $params = [];

        if ($this->limit !== null) {
            $params[Parameters::LIMIT] = $this->limit;
        }

        return $params;
    }

    function setType()
    {
        $this->type = self::GET;
    }

    /**
     * @return null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param null $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }




}