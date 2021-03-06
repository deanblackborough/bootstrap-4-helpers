[![Latest Stable Version](https://img.shields.io/packagist/v/deanblackborough/bootstrap-4-helpers.svg?style=flat-square)](https://packagist.org/packages/deanblackborough/bootstrap-4-helpers)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/deanblackborough/bootstrap-4-helpers/blob/master/LICENSE)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.0-8892BF.svg)](https://php.net/)
[![Total Downloads](https://img.shields.io/packagist/dt/deanblackborough/bootstrap-4-helpers.svg?style=flat-square)](https://packagist.org/packages/deanblackborough/bootstrap-4-helpers)

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

## Alert 

### Factory call

```
$alert = ViewHelper::alert('Alert message');
```

### Methods, can be chained

* ```setBgStyle(string $color)``` - Set the background colour
* ```setHeading(string $heading, int $heading_level)``` - Set optional heading
* ```setTextStyle(string $color)``` - Set the text colour

## Badge 

### Factory call

```
$badge = ViewHelper::badge('Label');
```

### Methods, can be chained

* ```asLink()``` - As link
* ```pill()``` - Display as pill
* ```setBgStyle(string $color)``` - Set the background colour
* ```setTextStyle(string $color)``` - Set the text colour

## Button 

### Factory call

```
$button = ViewHelper::button('Label');
```

### Methods, can be chained

* ```active()``` - Active
* ```block()``` - Display as a full width block
* ```customClass(string $class)``` - Add a custom class
* ```disabled()``` - Set disabled
* ```large()``` - Large button
* ```setBgStyle(string $color)``` - Set the background colour
* ```setModeButton()``` -  Render as a button
* ```setModeInput()``` - Render as an input
* ```setOutlineStyle()``` - Outline button
* ```setUri(string $uri)``` - Set URI
* ```small()``` - Small button

## Column 

### Factory call

```
$column = ViewHelper::column('<p>Content</p>');
```

### Methods, can be chained

* ```lg(int $size)``` - Set lg column width
* ```md(int $size)``` - Set md column width
* ```setBgStyle(string $color)``` - Set the background colour
* ```setTextStyle(string $color)``` - Set the text colour
* ```sm(int $size)``` - Set sm column width
* ```xl(int $size)``` - Set xl column width
* ```xs(int $size)``` - Set xs column width

## Jumbotron 

### Factory call

```
$jumbotron = ViewHelper::jumbotron('Heading', '<p>Content</p>');
```

### Methods, can be chained

* ```fluid()``` - Add fluid class
* ```setBgStyle(string $color)``` - Set the background colour
* ```setHeadingDisplayLevel(int $level)``` - Set the display level
* ```setSubHeading(string $sub_heading)``` - Set an optional sub heading
* ```setTextStyle(string $color)``` - Set the text colour

## Progress bar 

### Factory call

```
$progressBar = ViewHelper::progressBar(25);
```

### Methods, can be chained

* ```animate()``` - Animate
* ```setBgStyle(string $color)``` - Set the background colour
* ```setHeight(int $height)``` - Set height
* ```setLabel(string $label)``` - Set a label
* ```setTextStyle(string $color)``` - Set the text colour
* ```striped()``` - Striped background

## Row 

### Factory call

```
$row = ViewHelper::row('<div class="col-6"></div>');
```

### Methods, can be chained

* ```setBgStyle(string $color)``` - Set the background colour
* ```setTextStyle(string $color)``` - Set the text colour

# No tests?

I'm not adding tests to this library, the tests for the functionality are within the 
https://github.com/deanblackborough/zf3-view-helpers library, this library simply makes it possible to use 
the view helpers outside of the Zend Framework, I've not added any additional functionality.

