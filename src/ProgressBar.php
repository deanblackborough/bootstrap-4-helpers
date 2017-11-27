<?php

use DBlackborough\Zf3ViewHelpers\Bootstrap4ProgressBar;

/**
 * Generate a Bootstrap 4 Progress bar component
 *
 * @package DBlackborough\Bootstrap4Helpers
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Dean Blackborough
 * @license https://github.com/deanblackborough/bootstrap-4-helpers/blob/master/LICENSE
 */
class ProgressBar
{
    /**
     * @var Bootstrap4ProgressBar
     */
    private $helper;

    public function __construct()
    {
        $this->helper = new Bootstrap4ProgressBar();

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
     * @param integer $value Current progress bar value
     *
     * @return ProgressBar
     */
    public function helper(int $value) : ProgressBar
    {
        $this->helper->__invoke($value);

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
     * @return ProgressBar
     */
    public function setBgStyle(string $color) : ProgressBar
    {
        $this->helper->setBgStyle($color);

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
     * @return ProgressBar
     */
    public function setTextStyle(string $color) : ProgressBar
    {
        $this->helper->setTextStyle($color);

        return $this;
    }
}
