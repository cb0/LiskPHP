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

$loader = require __DIR__ . '/vendor/autoload.php';

$cliArgs = $argv;

//Get action name
$actionName = array_shift($cliArgs);

$basename = basename(__FILE__);

//if script was called by 'php ./scriptname args', get action name
if ($actionName === $basename) {
    $actionName = array_shift($cliArgs);
}

//parse cli args
$argumentsList = [];
foreach ($cliArgs as $arg) {
    if (strpos($arg, '--') === 0) {
        $paramPair = explode('=', substr($arg, 2));
        $argumentsList[$paramPair[0]] = $paramPair[1];
    } else {
        $argumentsList[$arg] = null;
    }
}

if (isset($argumentsList['action'])) {
    $actionName = $argumentsList['action'];
}

$options = $argumentsList;

$factory = new \Lisk\Cli\ActionFactory();

try {
    $client = new \Lisk\Client('http://node08.lisk.io');
    $action = $factory->create($actionName);
    $result = $action->call($client, $options);
    var_dump($result);
} catch (Throwable $t) {
    echo sprintf("Error: %s\n", $t->getMessage());
    if ($t instanceof TypeError) {
        showHelp();
    } else {
        echo sprintf("Stack: %s", $t->getTraceAsString());
    }
}

function showHelp()
{
    echo "show help";
}
