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

namespace Lisk\Api\Delegate;

use Lisk\AbstractRequest;
use Lisk\Cli\Parameters;

class GetForgedByAccountRequest extends AbstractRequest
{
    private $generatorPublicKey;
    private $start;
    private $end;

    public function __construct($generatorPublicKey, $start = null, $end = null)
    {
        parent::__construct();
        $this->generatorPublicKey = $generatorPublicKey;
        $this->start = $start;
        $this->end = $end;
    }

    public function setEndpoint()
    {
        $this->endpoint = "/api/delegates/forging/getForgedByAccount";
    }

    public function getPayload()
    {
        $payload = [
            Parameters::GENERATORPUBLICKEY => $this->generatorPublicKey
        ];

        if ($this->start !== null) {
            $payload[Parameters::FORGED_START] = $this->start;
        }
        if ($this->end !== null) {
            $payload[Parameters::FORGED_END] = $this->end;
        }

        return $payload;
    }

    public function setType()
    {
        $this->type = self::GET;
    }


}