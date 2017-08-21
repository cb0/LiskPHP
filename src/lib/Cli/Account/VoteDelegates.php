<?php
/**
 * LiskPhp - A PHP wrapper for the LISK API
 * Copyright (c) 2017  Marcus Puchalla <cb0@0xcb0.com>
 *
 * LiskPhp is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * LiskPhp is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with LiskPhp.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Lisk\Cli\Account;


use Lisk\Api\Account\RegistersAppResponse;
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
     * @return RegistersAppResponse
     */
    public function call(Client $client, array $args)
    {
        $param_arr = $this->getArguments($args);
        $call_user_func_array = call_user_func_array([$client, 'voteDelegates'], $param_arr);
        return $call_user_func_array;
    }

    public function setRequiredArguments()
    {
        $this->requiredArguments = [
            Parameters::VOTE_DELEGATES,
            Parameters::SECRET
        ];
    }

    public function setOptionalArguments()
    {
        $this->optionalArguments = [
            Parameters::SECOND_SECRET,
            Parameters::SENDER_PUBLIC_KEY
        ];
    }
}