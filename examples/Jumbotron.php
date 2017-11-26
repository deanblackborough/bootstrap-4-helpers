<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/ViewHelper.php';
require __DIR__ . '/../src/Jumbotron.php';

# Minimal example
$jumbotron = ViewHelper::jumbotron('Heading', '<p>Content</p>');
echo $jumbotron;

# Display with fluid class and primary background class
$jumbotron = ViewHelper::jumbotron('Heading', '<p>Content</p>');
echo $jumbotron->fluid()->setBgStyle('primary');

# Display with heading level 3
$jumbotron = ViewHelper::jumbotron('Heading', '<p>Content</p>');
echo $jumbotron->setHeadingDisplayLevel(3);
