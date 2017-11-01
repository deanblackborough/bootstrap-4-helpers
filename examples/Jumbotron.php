<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/Jumbotron.php';

Jumbotron::helper('Heading', '<p>Content</p>');
echo Jumbotron::render();
