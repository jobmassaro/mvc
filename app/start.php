<?php

require_once __DIR__.'/../vendor/autoload.php';

function die_r($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    die();
}