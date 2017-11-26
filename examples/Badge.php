<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/ViewHelper.php';
require __DIR__ . '/../src/Badge.php';

# Minimal example
$badge = ViewHelper::badge('Badge label');
echo $badge . PHP_EOL;

// Outputs: <span class="badge">Badge label</span>

# Display as a link
$badge = ViewHelper::badge('Badge label as link');
echo $badge->asLink('http://www.google.com')  . PHP_EOL;

// Outputs: <a href="http://www.google.com" class="badge">Badge label as link</a>

# Display as pill with danger bg style
$badge = ViewHelper::badge('Badge label');
echo $badge->pill()->setBgStyle('danger') . PHP_EOL;

// Outputs: <span class="badge badge-danger badge-pill">Badge label</span>
