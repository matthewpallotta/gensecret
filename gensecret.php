<?php
require('./vendor/autoload.php');

use Advancedideasmechanics\Generatepasswd\GenerateSecretService;

$argvCount = count($argv);

if ($argvCount < 1 && $argvCount < 3) {
    echo <<<HELP
Usage: gensecret.php password salt-length(optional)

HELP;
    exit(0);
} else {
    $genSecret = new GenerateSecretService();

    $secret = $argv[1];
    $salt = isset($argv[2]) && (int)$argv[2] > 1 ? $argv[2] : 64;
    echo "\n" . $genSecret->getSecret($argv[1], $salt) . "\n";
}
