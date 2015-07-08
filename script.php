<?php

require_once 'vendor/autoload.php';

use Test\Component\SimpleFinder;

$myFinder = new SimpleFinder();
$myFinder->printFiles();