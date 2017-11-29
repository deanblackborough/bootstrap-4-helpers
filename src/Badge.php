<?php

use DBlackborough\Zf3ViewHelpers\Bootstrap4Badge;

/**
 * Generate a Bootstrap 4 Badge component
 *
 * @package DBlackborough\Bootstrap4Helpers
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Dean Blackborough
 * @license https://github.com/deanblackborough/bootstrap-4-helpers/blob/master/LICENSE
 */
class Badge
{
    /**
     * @var Bootstrap4Badge
     */
    private $helper;

    public function __construct()
    {
        $this->helper = new Bootstrap4Badge();

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
     * As link
     *
     * Added a uri and render the badge as a link
     *
     * @param string $uri
     *
     * @return Badge
     */
    public function asLink(string $uri) : Badge
    {
        $this->helper->asLink($uri);

        return $this;
    }

    /**
     * Instantiate the view helper
     *
     * Opening call for view helper, instantiates the view helper with the minimum parameters required to create
     * a usable component
     *
     * @param string $label Badge label
     *
     * @return Badge
     */
    public function helper(string $label) : Badge
    {
        $this->helper->__invoke($label);

        return $this;
    }

    /**
     * Display as pill
     *
     * Add the pill class to render the badge as a pill
     *
     * @return Badge
     */
    public function pill(): Badge
    {
        $this->helper->pill();

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
     * @return Badge
     */
    public function setBgStyle(string $color) : Badge
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
     * @return Badge
     */
    public function setTextStyle(string $color) : Badge
    {
        $this->helper->setTextStyle($color);

        return $this;
    }
}
