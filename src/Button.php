<?php

use DBlackborough\Zf3ViewHelpers\Bootstrap4Button;

/**
 * Generate a Bootstrap 4 Button component
 *
 * @package DBlackborough\Bootstrap4Helpers
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Dean Blackborough
 * @license https://github.com/deanblackborough/bootstrap-4-helpers/blob/master/LICENSE
 */
class Button
{
    /**
     * @var Bootstrap4Button
     */
    private $helper;

    public function __construct()
    {
        $this->helper = new Bootstrap4Button();

        return $this;
    }

    /**
     * Override __toString() so we can echo the view object directly
     *
     * @return string
     */
    public function __toString() : string
    {
        return $this->render();
    }

    /**
     * Active
     *
     * Add the active class to the button
     *
     * @return Button
     */
    public function active(): Button
    {
        $this->helper->active();

        return $this;
    }

    /**
     * Display as a full width block
     *
     * Add the block class to the button
     *
     * @return Button
     */
    public function block(): Button
    {
        $this->helper->block();

        return $this;
    }

    /**
     * Add a custom class
     *
     * Add a custom css class to the button component
     *
     * @param string $class
     *
     * @return Button
     */
    public function customClass($class): Button
    {
        $this->helper->customClass($class);

        return $this;
    }

    /**
     * Set disabled
     *
     * Add the disabled class to the button component
     *
     * @return Button
     */
    public function disabled(): Button
    {
        $this->helper->disabled();

        return $this;
    }

    /**
     * Instantiate the view helper
     *
     * Opening call for view helper, instantiates the view helper with the minimum parameters required to create
     * a usable component
     *
     * @param string $label Button label
     *
     * @return Button
     */
    public function helper(string $label) : Button
    {
        $this->helper->__invoke($label);

        return $this;
    }

    /**
     * Large button
     *
     * Display using the large button style
     *
     * @return Button
     */
    public function large(): Button
    {
        $this->helper->large();

        return $this;
    }

    /**
     * Return the generated HTML
     *
     * @return string
     */
    protected function render() : string
    {
        return $this->helper;
    }

    /**
     * Set the background colour
     *
     * Assign the background color class to use for the component, the class needs to be one of the following,
     * primary, secondary, success, danger, warning, info, light, dark or white, if an incorrect colour string
     * is passed in we don't apply the class.
     *
     * @param string $color
     *
     * @return Button
     */
    public function setBgStyle(string $color) : Button
    {
        $this->helper->setBgStyle($color);

        return $this;
    }

    /**
     * Render as a button
     *
     * Set the button to render as a button, the default is an anchor
     *
     * @return Button
     */
    public function setModeButton(): Button
    {
        $this->helper->setModeButton();

        return $this;
    }

    /**
     * Render as an input
     *
     * Set the button to render as an input, can be a submit, button or reset input
     *
     * @param string $type Input type, button, submit or reset, defaults to button if invalid type
     *
     * @return Button
     */
    public function setModeInput(string $type): Button
    {
        $this->helper->setModeInput($type);

        return $this;
    }

    /**
     * Outline button
     *
     * Render the button with one of the outline styles, the style needs to be one of the following, primary,
     * secondary, success, info, warning or danger. If an incorrect style is passed in we set the style to
     * btn-outline-primary
     *
     * @param string $style
     *
     * @return Button
     */
    public function setOutlineStyle(string $style): Button
    {
        $this->helper->setOutlineStyle($style);

        return $this;
    }

    /**
     * Set the text colour
     *
     * Assign the text color class to use for the the component, the class needs to be one of the following,
     * primary, secondary, success, danger, warning, info, light or dark, if an incorrect colour string is passed
     * in we don't apply the class.
     *
     * @param string $color
     *
     * @return Button
     */
    public function setTextStyle(string $color) : Button
    {
        $this->helper->setTextStyle($color);

        return $this;
    }

    /**
     * Set URI
     *
     * Set the URI for the button, only usable when in the default mode, anchor tag, ignored in button and input mode
     *
     * @param string $uri
     *
     * @return Button
     */
    public function setUri(string $uri): Button
    {
        $this->helper->setUri($uri);

        return $this;
    }

    /**
     * Small button
     *
     * Display using the small button style
     *
     * @return Button
     */
    public function small(): Button
    {
        $this->helper->small();

        return $this;
    }
}
