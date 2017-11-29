<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/ViewHelper.php';
require __DIR__ . '/../src/Button.php';

# Minimal example
$button = ViewHelper::button('Button label');
echo $button . PHP_EOL;

// Outputs: <a href="#" class="btn" role="button">Button label</a>

# Button, active class, block layout
$button = ViewHelper::button('Button label');
echo $button->active()->block() . PHP_EOL;

// Outputs: <a href="#" class="btn btn-block active" role="button">Button label</a>

# Button, uri set, large class assigned, disabled
$button = ViewHelper::button('Button label');
echo $button->disabled()->large()->setUri('http://www.google.com') . PHP_EOL;

// Outputs: <a href="http://www.google.com" class="btn btn-lg disabled" role="button">Button label</a>

# Reset input, outline primary style and small class
$button = ViewHelper::button('Button label');
echo $button->setOutlineStyle('primary')->setModeInput('reset')->small() . PHP_EOL;

// Outputs: <input class="btn btn-outline-primary btn-sm" type="reset" value="Button label" />
