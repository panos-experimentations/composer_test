<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require 'vendor/autoload.php';

$dbg = [];

$dbg[] = \blabla\Models\Foo::test();
$dbg[] = \blabla\Models\Bar::test();


echo "<pre>\n\n";

print_r($dbg);
