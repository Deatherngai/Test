<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('FirebaseAdminSDK.json')
    ->withDatabaseUri('https://lbms-92247-default-rtdb.firebaseio.com/');
    $database = $factory->createDatabase()

?>