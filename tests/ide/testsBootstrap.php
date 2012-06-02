<?php

require_once 'SplClassLoader.php';

$classLoader = new SplClassLoader('Paq', __DIR__ . '/../../src');
$classLoader = new SplClassLoader('Php', __DIR__ . '/../../src');
$classLoader->register();