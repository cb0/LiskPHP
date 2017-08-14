<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 12.08.17
 * Time: 12:38
 */

namespace Lisk\Cli\Peer;


use Lisk\Api\Transaction\ListTransactionsResponse;
use Lisk\Cli\AbstractCliAction;
use Lisk\Cli\Parameters;
use Lisk\Client;

class GetPeerList extends AbstractCliAction
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
        return call_user_func_array([$client, 'getPeerList'], $this->getArguments($args));
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
                    "'getPeerList' requires at least one parameter. Options: '%s'",
                    implode(",", $this->optionalArguments)
                )
            );
        }
    }

    protected function setOptionalArguments()
    {
        $this->optionalArguments = [
            Parameters::STATE,
            Parameters::OS,
            Parameters::VERSION,
            Parameters::LIMIT,
            Parameters::OFFSET,
            Parameters::ORDERBY,
        ];
    }
}