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

namespace Lisk\Cli\Apps;


use Lisk\Cli\AbstractCliAction;
use Lisk\Cli\Parameters;
use Lisk\Client;

class GetApps extends AbstractCliAction
{

    /**
     * Get Account Information
     *
     * Request information about an account.
     *
     * @param Client $client
     * @param array $args
     * @return \Lisk\Api\Apps\RegisterAppResponse
     */
    public function call(Client $client, array $args)
    {
        return call_user_func_array([$client, 'getApps'], $this->getArguments($args));
    }

    public function setRequiredArguments()
    {
        $this->requiredArguments = [
        ];
    }

    public function setOptionalArguments()
    {
        $this->optionalArguments = [
            Parameters::CATEGORY,
            Parameters::NAME,
            Parameters::TYPE,
            Parameters::LINK,
            Parameters::LIMIT,
            Parameters::OFFSET,
            Parameters::ORDERBY
        ];

    }
}