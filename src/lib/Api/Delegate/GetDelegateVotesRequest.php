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

class GetDelegateVotesRequest extends AbstractRequest
{

    private $address;

    public function __construct($address)
    {
        parent::__construct();
        $this->address = $address;
    }

    function setEndpoint()
    {
        $this->endpoint = "/api/accounts/delegates/";
    }

    public function getPayload()
    {
        $params = [
            Parameters::ADDRESS => $this->address
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
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }





}