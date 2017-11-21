# Bootstrap 4 helpers

Bootstrap 4 component helpers

## Description

Utility wrapper classes for the Bootstrap 4 view helpers in my ZF3-view-helpers library 
(https://github.com/deanblackborough/zf3-view-helpers), allows usage of the view helpers in any PHP site, 
not just Zend Framework apps.

## Installation

The easiest way to use the view helpers is via composer, `composer require deanblackborough/bootstrap-4-helpers`, 
alternatively include the classes in `src/` in your library.

## Usage

Create a view helper is a two step process, you need to call the ViewHelper factory to create the relevant 
view helper and then you can chain the helpers methods to create your component.

```
$jumbotron = ViewHelper::jumbotron('Heading', '<p>Content</p>');
echo $jumbotron->fluid()->setBgStyle('primary');
``` 

# The view helpers

## Jumbotron 

### Factory call

```
$jumbotron = ViewHelper::jumbotron('Heading', '<p>Content</p>');
```

### Methods, can be chained

* ```fluid()``` 
* ```setBgStyle(string $color)```
* ```setHeadingDisplayLevel(int $level)```
* ```setSubHeading(string $sub_heading)```
* ```setTextStyle(string $color)```

