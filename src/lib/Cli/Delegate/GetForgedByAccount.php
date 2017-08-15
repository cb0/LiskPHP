<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 12.08.17
 * Time: 12:38
 */

namespace Lisk\Cli\Delegate;


use Lisk\Api\Loader\BlockStatusResponse;
use Lisk\Cli\AbstractCliAction;
use Lisk\Cli\Parameters;
use Lisk\Client;

class GetForgedByAccount extends AbstractCliAction
{
    /**
     * Get Account Information
     *
     * Request information about an account.
     *
     * @param Client $client
     * @param array $args
     * @return BlockStatusResponse
     */
    function call(Client $client, array $args)
    {
        return call_user_func_array([$client, 'getForgedByAccount'], $this->getArguments($args));
    }

    function setRequiredArguments()
    {
        $this->requiredArguments = [
            Parameters::GENERATORPUBLICKEY
        ];
    }

    protected function setOptionalArguments()
    {
        return [
            Parameters::START,
            Parameters::END
        ];
    }
}