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

class VoteDelegates extends AbstractCliAction
{

    /**
     * Get Account Information
     *
     * Request information about an account.
     *
     * @param Client $client
     * @param array $args
     * @return AccountInformationResponse
     */
    function call(Client $client, array $args)
    {
        $param_arr = $this->getArguments($args);
        $call_user_func_array = call_user_func_array([$client, 'voteDelegates'], $param_arr);
        return $call_user_func_array;
    }

    function setRequiredArguments()
    {
        $this->requiredArguments = [
            Parameters::VOTE_DELEGATES,
            Parameters::SECRET
        ];
    }

    function setOptionalArguments()
    {
        $this->optionalArguments = [
            Parameters::SECOND_SECRET,
            Parameters::SENDER_PUBLIC_KEY
        ];
    }
}