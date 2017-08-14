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

class GetPeer extends AbstractCliAction
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
        return call_user_func_array([$client, 'getPeer'], $this->getArguments($args));
    }

    protected function setRequiredArguments()
    {
        $this->requiredArguments = [
            Parameters::IP,
            Parameters::PORT
        ];
    }

}