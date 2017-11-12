<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/Jumbotron.php';

# Plan
$jumbotron = ViewHelper::jumbotron('Heading', '<p>Content</p>');
echo $jumbotron->fluid();
