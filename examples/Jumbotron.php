<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/ViewHelper.php';
require __DIR__ . '/../src/Jumbotron.php';

# Minimal example
$jumbotron = ViewHelper::jumbotron('Heading', '<p>Content</p>');
echo $jumbotron . PHP_EOL;

// Outputs: <div class="jumbotron"><h1 class="display-1">Heading</h1><p>Content</p></div>

# Display with fluid class and primary background class
$jumbotron = ViewHelper::jumbotron('Heading', '<p>Content</p>');
echo $jumbotron->fluid()->setBgStyle('primary') . PHP_EOL;

// Outputs: <div class="jumbotron jumbotron-fluid bg-primary"><div class="container"><h1 class="display-1">Heading</h1><p>Content</p></div></div>

# Display with heading level 3
$jumbotron = ViewHelper::jumbotron('Heading', '<p>Content</p>');
echo $jumbotron->setHeadingDisplayLevel(3) . PHP_EOL;

// Outputs: <div class="jumbotron"><h1 class="display-3">Heading</h1><p>Content</p></div>
