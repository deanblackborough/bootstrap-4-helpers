<?php

use DBlackborough\Zf3ViewHelpers\Bootstrap4Alert;

/**
 * Generate a Bootstrap 4 Alert component
 *
 * @package DBlackborough\Bootstrap4Helpers
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Dean Blackborough
 * @license https://github.com/deanblackborough/bootstrap-4-helpers/blob/master/LICENSE
 */
class Alert
{
    /**
     * @var Bootstrap4Alert
     */
    private $helper;

    public function __construct()
    {
        $this->helper = new Bootstrap4Alert();

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
     * Instantiate the view helper
     *
     * Opening call for view helper, instantiates the view helper with the minimum parameters required to create
     * a usable component
     *
     * @param string $message HTML content to display inside the alert
     *
     * @return Alert
     */
    public function helper(string $message) : Alert
    {
        $this->helper->__invoke($message);

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
     * @return Alert
     */
    public function setBgStyle(string $color) : Alert
    {
        $this->helper->setBgStyle($color);

        return $this;
    }

    /**
     * Set an optional heading
     *
     * The optional heading will be placed inside the relevant H tag, defaults to H4
     *
     * @param string $heading
     * @param integer $heading_level Optional heading level, 1-7 defaults to 4
     *
     * @return Alert
     */
    public function setHeading(string $heading, int $heading_level = 4) : Alert
    {
        $this->helper->setHeading($heading. $heading_level);

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
     * @return Alert
     */
    public function setTextStyle(string $color) : Alert
    {
        $this->helper->setTextStyle($color);

        return $this;
    }
}
