<?php
require "vendor/autoload.php";

use Paysera\CommissionTask\Controller\MainController;

echo "Please write path to file: ";
$line = str_replace(PHP_EOL, '', fgets(STDIN));
$controller = new MainController();
$controller->start($line);

