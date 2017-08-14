<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 17:09
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
    $client = new \Lisk\Client('http://139.162.204.5:7000');
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
