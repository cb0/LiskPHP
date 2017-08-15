<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 12.08.17
 * Time: 14:49
 */

namespace Lisk\Model;


class Voter extends Account
{
    private $username;
    private $balance;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return Voter
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param mixed $balance
     * @return Voter
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
        return $this;
    }




}