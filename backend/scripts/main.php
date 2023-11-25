<?php

use Palmo\Core\service\Db;

$dbh = (new Db())->getHandler();
$statement = $dbh->query('select * from users');
$users = $statement->fetchAll();

print_r($users);







