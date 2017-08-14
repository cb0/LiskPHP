<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 12.08.17
 * Time: 12:38
 */

namespace Lisk\Cli\Transaction;


use Lisk\Api\Transaction\ListTransactionsResponse;
use Lisk\Cli\AbstractCliAction;
use Lisk\Cli\Parameters;
use Lisk\Client;

class ListTransactions extends AbstractCliAction
{

    /**
     * Get Account Information
     *
     * Request information about an account.
     *
     * @param Client $client
     * @param array $args
     * @return ListTransactionsResponse
     */
    public function call(Client $client, array $args)
    {
        return call_user_func_array([$client, 'listTransactions'], $this->getArguments($args));
    }

    protected function setRequiredArguments()
    {
        $this->requiredArguments = [];
    }

    protected function checkRequirements($args)
    {
        parent::checkRequirements($args);
        if (empty($args)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "'listTransactions' requires at least one parameter. Options: '%s'",
                    implode(",", $this->optionalArguments)
                )
            );
        }
    }

    protected function setOptionalArguments()
    {
        $this->optionalArguments = [
            Parameters::BLOCKID,
            Parameters::SENDERID,
            Parameters::RECIPIENTID,
            Parameters::LIMIT,
            Parameters::OFFSET,
            Parameters::ORDERBY,
        ];
    }
}