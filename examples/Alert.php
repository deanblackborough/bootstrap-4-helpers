<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/ViewHelper.php';
require __DIR__ . '/../src/Alert.php';

# Minimal example
$alert = ViewHelper::alert('Alert message');
echo $alert . PHP_EOL;

// Outputs: <div class="alert" role="alert">Alert message</div>

# Background colour set
$alert = ViewHelper::alert('Alert message');
echo $alert->setBgStyle('warning')  . PHP_EOL;

// Outputs: <div class="alert alert-warning" role="alert">Alert message</div>

# With an optional heading
$alert = ViewHelper::alert('<p>Alert message</p>');
echo $alert->setHeading('Optional heading') . PHP_EOL;

// Outputs: <div class="alert" role="alert"><h4 class="alert-heading">Optional heading4</h4><p>Alert message</p></div>
