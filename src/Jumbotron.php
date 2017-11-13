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
     * Opening call for view helper, the minimum parameters required to create component
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
     * Add the fluid class to make Jumbotron full width and without rounded corners
     *
     * @return Jumbotron
     */
    public function fluid() : Jumbotron
    {
        $this->helper->fluid();

        return $this;
    }

    /**
     * Set the background colour for the component, needs to be one of the following, primary, secondary, success,
     * danger, warning, info, light, dark or white, if an incorrect style is passed in we don't apply the class.
     *
     * @param string $color
     *
     * @return Jumbotron
     */
    public function setBgStyle($color) : Jumbotron
    {
        $this->helper->setBgStyle($color);

        return $this;
    }

    /**
     * Set the display level class for a heading title, display-[1-4]
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
     * Set an optional sub heading, added to the end of the heading inside small tags
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
     * Set the text color for the component, need to be one of the following, primary, secondary, success, danger,
     * warning, info, light or dark, if an incorrect style is passed in we don't apply the class.
     *
     * @param string $color
     *
     * @return Jumbotron
     */
    public function setTextStyle($color) : Jumbotron
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


    /**
     * Override __toString() so we can echo the view object directly
     *
     * @return string
     */
    public function __toString() : string
    {
        return $this->render();
    }
}
