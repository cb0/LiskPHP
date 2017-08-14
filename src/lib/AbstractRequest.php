<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk;


abstract class AbstractRequest
{
    const GET = "GET";
    const POST = "POST";
    const PUT = "PUT";

    protected $endpoint = "";
    protected $type = self::GET;

    public function __construct()
    {
        $this->setEndpoint();
        $this->setType();

        return $this;
    }

    abstract public function getPayload();

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    abstract public function setType();

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    abstract public function setEndpoint();
}