<<<<<<< HEAD
<?php
require 'environment.php';

$config = array();
if (ENVIRONMENT == 'development') {    
    define("BASE_URL", "http://localhost/RTO/");
    $config['dbname'] = 'rto';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    define("BASE_URL", "http:/www.resolvetudoonline.com.br/");
    $config['dbname'] = 'RTO_prod';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
}

global $db;
try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], 
            $config['dbuser'], $config['dbpass']);
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
=======
<?php
require 'environment.php';

$config = array();
if (ENVIRONMENT == 'development') {    
    define("BASE_URL", "http://localhost/RTO/");
    $config['dbname'] = 'rto';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    define("BASE_URL", "http:/www.resolvetudoonline.com.br/");
    $config['dbname'] = 'RTO_prod';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
}

global $db;
try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], 
            $config['dbuser'], $config['dbpass']);
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
>>>>>>> ee9005307494224feaa0340bc566c79104a532c0
}