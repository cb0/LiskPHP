<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:40
 */

namespace Lisk\Api\Account;

use Lisk\AbstractResponse;

class BalanceResponse extends AbstractResponse
{
    private $balance = 0;
    private $unconfirmedBalance = 0;

    public function success($jsonResponse)
    {
        $this->balance = $jsonResponse['balance'];
        $this->unconfirmedBalance = $jsonResponse['unconfirmedBalance'];
    }

    /**
     * @return int
     */
    public function getConfirmedBalance()
    {
        return $this->balance;
    }

    /**
     * @param int $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return int
     */
    public function getUnconfirmedBalance()
    {
        return $this->unconfirmedBalance;
    }


    /**
     * @param int $unconfirmedBalance
     */
    public function setUnconfirmedBalance($unconfirmedBalance)
    {
        $this->unconfirmedBalance = $unconfirmedBalance;
    }
}