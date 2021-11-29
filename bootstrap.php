<?php
require 'vendor/autoload.php';
use Dotenv\Dotenv;

use Src\System\DatabaseConnector;

$dotenv = new DotEnv(__DIR__);
$dotenv->load();

$dbConnection = (new DatabaseConnector())->getConnection();

/**
 * test example:
 * $personGateway = new \Src\TableGateways\PersonGateway($dbConnection);
 * $result = $personGateway->findAll();
 * var_dump($result);
 */

