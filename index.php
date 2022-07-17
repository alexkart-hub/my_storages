<?php
include 'autoload.php';
$dataManager = new dataManager(new storageCache());
$user = $dataManager->getUser('user_12345');
echo 'return ' . $user . PHP_EOL;