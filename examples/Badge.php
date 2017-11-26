<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/ViewHelper.php';
require __DIR__ . '/../src/Badge.php';

# Minimal example
$badge = ViewHelper::badge('Badge label');
echo $badge;

# Display as a link
$badge = ViewHelper::badge('Badge label as link');
echo $badge->asLink('http://www.google.com');

# Display as pill with danger bg style
$badge = ViewHelper::badge('Badge label');
echo $badge->pill()->setBgStyle('danger');
