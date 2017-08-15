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

class SearchDelegateRequest extends AbstractRequest
{

    private $username;
    private $orderBy;

    public function __construct($username, $orderBy = null)
    {
        parent::__construct();
        $this->username = $username;
        $this->orderBy = $orderBy;
    }

    function setEndpoint()
    {
        $this->endpoint = "/api/delegates/search";
    }

    public function getPayload()
    {
        $params = [
            'q' => $this->username
        ];

        if ($this->orderBy !== null) {
            $params[Parameters::ORDERBY] = $this->orderBy;;
        }

        return $params;
    }

    function setType()
    {
        $this->type = self::GET;
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
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return null
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @param null $orderBy
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
    }





}