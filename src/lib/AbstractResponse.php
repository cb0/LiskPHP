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

namespace Lisk;


abstract class AbstractResponse
{
    private $error = "";
    private $success = false;

    public function __construct(array $response)
    {
        $this->success = $response['success'];

        if ($this->isSuccess()) {
            $this->success($response);
        } else {
            $this->error($response['error'] ?? "unknown error");
        }

        if ($this->success === false) {
            $this->error = $response['error'];
        }
    }

    /**
     * @return boolean
     */
    public function isSuccess()
    {
        return $this->success;
    }

    public abstract function success($jsonResponse);

    protected function error($errorMessage)
    {
        throw new \Exception($errorMessage);
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }


}