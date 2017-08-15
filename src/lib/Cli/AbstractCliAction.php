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

namespace Lisk\Cli;

use InvalidArgumentException;

abstract class AbstractCliAction
{
    protected $requiredArguments = [];
    protected $optionalArguments = [];

    public function __construct()
    {
        $this->setRequiredArguments();
    }

    protected abstract function setRequiredArguments();

    protected function getArguments($args)
    {
        $this->checkRequirements($args);
        $argArray = [];
        $array_merge = array_merge($this->requiredArguments, $this->optionalArguments);
        foreach ($array_merge as $index => $requirement) {
            //if optional argument was not set, $args[$requirement] will not be set.
            if (isset($args[$requirement])) {
                $argArray[$index] = $args[$requirement];
            } else {
                $argArray[$index] = null;
            }
        }
        return $argArray;
    }

    /**
     * Check if all required arguments were passed in $args array.
     *
     * @param $args
     * @throws InvalidArgumentException If required argument is missing.
     */
    protected function checkRequirements($args)
    {
        foreach ($this->requiredArguments as $requirement) {
            if (!isset($args[$requirement])) {
                throw new InvalidArgumentException(
                    sprintf(
                        "Argument '%s' (%s) is missing." . PHP_EOL,
                        $requirement,
                        Parameters::$descriptions[$requirement]
                    )
                );
            }
        }

        $this->setOptionalArguments();
    }

    protected function setOptionalArguments()
    {
        //should be set by subclasses if needed
    }
}