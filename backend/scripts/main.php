<?php
// Простір імен " Palmo\Core"
namespace Palmo\Core;

// Базовий клас "User" у просторі імен " Palmo\Core"
use Palmo\Core\service\Admin as Administarator;

class User {
   public function __construct()
   {
       echo "User";
   }
}

$user = new User();
echo "<br>";
$admin = new Administarator();




