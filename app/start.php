<?php


ini_set('display_errors','On' );
ini_set('html_errors','On');

define('APP_ROOT',__DIR__);
define('VIEW_ROOT',APP_ROOT.'/views/');
define('BASE_URL', 'http://localhost');

$db = new PDO('mysql:host=localhost;dbname=cms','root','2trI:tU&HS');

require 'function.php';
