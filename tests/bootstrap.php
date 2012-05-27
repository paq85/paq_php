<?php

require_once 'lib/SplClassLoader.php';

$classLoader = new SplClassLoader('Paq', __DIR__ . '/../');
$classLoader->register();