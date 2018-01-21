<?php

use DBlackborough\Zf3ViewHelpers\Bootstrap4Row;

/**
 * Generate a Bootstrap 4 row
 *
 * @package DBlackborough\Bootstrap4Helpers
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Dean Blackborough
 * @license https://github.com/deanblackborough/bootstrap-4-helpers/blob/master/LICENSE
 */
class Row
{
    /**
     * @var Bootstrap4Row
     */
    private $helper;

    public function __construct()
    {
        $this->helper = new Bootstrap4Row();

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
     * @param string $content Row content
     *
     * @return Row
     */
    public function helper(string $content) : Row
    {
        $this->helper->__invoke($content);

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
     * @return Row
     */
    public function setBgStyle(string $color) : Row
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
     * @return Row
     */
    public function setTextStyle(string $color) : Row
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
