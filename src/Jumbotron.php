<?php

use DBlackborough\Zf3ViewHelpers\Bootstrap4Jumbotron;

/**
 * Generate a Bootstrap 4 Jumbotron component
 *
 * @package DBlackborough\Bootstrap4Helpers
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Dean Blackborough
 * @license https://github.com/deanblackborough/bootstrap-4-helpers/blob/master/LICENSE
 */
class Jumbotron
{
    /**
     * @var Bootstrap4Jumbotron
     */
    private $helper;

    public function __construct()
    {
        $this->helper = new Bootstrap4Jumbotron();

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
     * @param string $heading
     * @param string $content
     *
     * @return Jumbotron
     */
    public function helper(string $heading, string $content) : Jumbotron
    {
        $this->helper->__invoke($heading, $content);

        return $this;
    }

    /**
     * Add fluid class
     *
     * Assign the fluid class to the Jumbotron to make the Jumbotron full width and without rounded corners
     *
     * @return Jumbotron
     */
    public function fluid() : Jumbotron
    {
        $this->helper->fluid();

        return $this;
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
     * @return Jumbotron
     */
    public function setBgStyle(string $color) : Jumbotron
    {
        $this->helper->setBgStyle($color);

        return $this;
    }

    /**
     * Set the display level
     *
     * Set the display level class to use for the heading title, a value between 1 and 4, generates the class
     * display-[1-4]
     *
     * @param integer $level [1-4]
     *
     * @return Jumbotron
     */
    public function setHeadingDisplayLevel(int $level) : Jumbotron
    {
        $this->helper->setHeadingDisplayLevel($level);

        return $this;
    }

    /**
     * Set an optional sub heading
     *
     * Assign an optional sub heading, the heading will be appended to the heading and placed within small tags
     *
     * @param string $sub_heading
     *
     * @return Jumbotron
     */
    public function setSubHeading(string $sub_heading) : Jumbotron
    {
        $this->helper->setSubHeading($sub_heading);

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
     * @return Jumbotron
     */
    public function setTextStyle(string $color) : Jumbotron
    {
        $this->helper->setTextStyle($color);

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
}
