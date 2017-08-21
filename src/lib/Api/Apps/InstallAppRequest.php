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


class InstallAppRequest extends AbstractRequest
{
    private $id;

    public function __construct($id)
    {
        parent::__construct();
        $this->id = $id;
    }

    public function setEndpoint()
    {
        $this->endpoint = "/api/dapps/install";
    }


    public function setType()
    {
        $this->type = self::POST;
    }

    public function getPayload()
    {

        return [
            Parameters::ID => $this->id
        ];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



}