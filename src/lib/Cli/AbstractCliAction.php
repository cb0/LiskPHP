<?php

/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 12.08.17
 * Time: 12:36
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