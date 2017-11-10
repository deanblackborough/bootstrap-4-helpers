<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/Jumbotron.php';

# Option 1

$helper = new Jumbotron();
echo $helper->helper('Heading', '<p>Content</p>')->fluid()->render();

# Option 2
$helper = new Jumbotron('Heading', '<p>Content</p>');
echo $helper->fluid()->render();

# Option 3
$helper = Jumbotron::helper();
echo $helper->init('Heading', '<p>Content</p>')->fluid()->render();

# Option 4
echo Jumbotron::helper(
    [
        Jumbotron::init('Heading', '<p>Content</p>'),
        Jumbotron::fluid()
    ]
);

# Option 5
$jumbotron = ViewHelper::jumbotron();
echo $jumbotron->init('Heading', '<p>Content</p>')->fluid()->render();

# Option 6
$jumbotron = ViewHelper::jumbotron('Heading', '<p>Content</p>');
echo $jumbotron->fluid()->render();

# Option 7
$jumbotron = ViewHelper::jumbotron('Heading', '<p>Content</p>');
echo $jumbotron->fluid();
