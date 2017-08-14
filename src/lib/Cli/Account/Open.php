<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 12.08.17
 * Time: 12:38
 */

namespace Lisk\Cli\Account;


use Lisk\Api\Account\AccountInformationResponse;
use Lisk\Cli\AbstractCliAction;
use Lisk\Cli\Parameters;
use Lisk\Client;

class Open extends AbstractCliAction
{

    /**
     * Get Account Information from Address
     *
     * Returns account information of an address.
     *
     * @param Client $client
     * @param array $args
     * @return AccountInformationResponse
     */
    function call(Client $client, array $args)
    {
        return call_user_func_array([$client, 'openAccount'], $this->getArguments($args));
    }

    function setRequiredArguments()
    {
        $this->requiredArguments = [
            Parameters::SECRET
        ];
    }
}