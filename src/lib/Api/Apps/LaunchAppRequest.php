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

namespace Lisk\Api\Apps;

use Lisk\AbstractRequest;
use Lisk\Cli\Parameters;


class LaunchAppRequest extends AbstractRequest
{
    private $id;
    private $params;

    public function __construct($id, $params = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->params = $params;

    }

    public function setEndpoint()
    {
        $this->endpoint = "/api/dapps/launch";
    }


    public function setType()
    {
        $this->type = self::POST;
    }

    public function getPayload()
    {

        $arr = [
            Parameters::ID => $this->id
        ];

        if ($this->params !== null) {
            $arr[Parameters::PARAMS] = $this->params;
        }
        return $arr;
    }

}