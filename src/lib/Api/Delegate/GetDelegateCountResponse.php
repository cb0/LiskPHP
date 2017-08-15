<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Delegate;

use Lisk\AbstractResponse;
use Lisk\Model\Delegate;

class GetDelegateCountResponse extends AbstractResponse
{
    private $count;


    public function success($jsonResponse)
    {
        $this->count = $jsonResponse['count'];
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }



}