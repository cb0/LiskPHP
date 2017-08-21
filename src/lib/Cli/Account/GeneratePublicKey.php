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

class GeneratePublicKey extends AbstractCliAction
{

    /**
     * Get Account Public Key
     *
     * Get the public key of an account. If the account does not exist the API call will return an error.
     *
     * @param Client $client
     * @param array $args
     * @return RegistersAppResponse
     */
    public function call(Client $client, array $args)
    {
        return call_user_func_array([$client, 'generatePublicKey'], $this->getArguments($args));
    }

    public function setRequiredArguments()
    {
        $this->requiredArguments = [
            Parameters::SECRET
        ];
    }
}