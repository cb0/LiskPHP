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