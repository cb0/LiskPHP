<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 19:02
 */

namespace Lisk;


abstract class AbstractResponse
{
    private $error = "";
    private $success = false;

    public function __construct(array $response)
    {
        $this->success = $response['success'];

        if ($this->isSuccess()) {
            $this->success($response);
//            $this->block = (new Block())->fromArray($jsonResponse['blocks']);
        } else {
            throw new \Exception($this->getError());
        }

        if ($this->success === false) {
            $this->error = $response['error'];
        }
    }

    /**
     * @return boolean
     */
    public function isSuccess()
    {
        return $this->success;
    }

    public abstract function success($jsonResponse);

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }


}