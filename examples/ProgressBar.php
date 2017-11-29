<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/ViewHelper.php';
require __DIR__ . '/../src/ProgressBar.php';

# Minimal example
$badge = ViewHelper::progressBar(25);
echo $badge . PHP_EOL;

// Outputs: <div class="progress"><div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div>

# Animate progress bar
$badge = ViewHelper::progressBar(25);
echo $badge->animate()  . PHP_EOL;

// Outputs: <div class="progress"><div class="progress-bar progress-bar-animated" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div>

# Striped, animated warning progress bar with a label
$badge = ViewHelper::progressBar(25);
echo $badge->setBgStyle('warning')->animate()->striped()->setLabel('25%') . PHP_EOL;

// Outputs: <div class="progress"><div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div></div>
