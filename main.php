<?php

use Com\Iesebre\Dam2\simongonzalez\Person\Person;
require "/home/sylver/Code/School/Classes/Person/Person.php";

/**
 * Created by PhpStorm.
 * User: sylver
 * Date: 5/10/15
 * Time: 20:27
 */

$person = new Person();

$person->type = "L'alumna";
$person->setGivenName("Pepita Palotes");

$person->render();
