<?php

use DBlackborough\Zf3ViewHelpers\Bootstrap4Column;

/**
 * Generate a Bootstrap 4 column
 *
 * @package DBlackborough\Bootstrap4Helpers
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Dean Blackborough
 * @license https://github.com/deanblackborough/bootstrap-4-helpers/blob/master/LICENSE
 */
class Column
{
    /**
     * @var Bootstrap4Column
     */
    private $helper;

    public function __construct()
    {
        $this->helper = new Bootstrap4Column();

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
     * @param string $content Column content
     *
     * @return Column
     */
    public function helper(string $content) : Column
    {
        $this->helper->__invoke($content);

        return $this;
    }

    /**
     * Large 'lg' column
     *
     * @param integer $size Number of lg columns, a value between 1 and 12
     *
     * @return Column
     */
    public function lg(int $size): Column
    {
        $this->helper->lg($size);

        return $this;
    }

    /**
     * Large 'md' column
     *
     * @param integer $size Number of md columns, a value between 1 and 12
     *
     * @return Column
     */
    public function md(int $size): Column
    {
        $this->helper->md($size);

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
     * @return Column
     */
    public function setBgStyle(string $color) : Column
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
     * @return Column
     */
    public function setTextStyle(string $color) : Column
    {
        $this->helper->setTextStyle($color);

        return $this;
    }

    /**
     * Large 'sm' column
     *
     * @param integer $size Number of sm columns, a value between 1 and 12
     *
     * @return Column
     */
    public function sm(int $size): Column
    {
        $this->helper->sm($size);

        return $this;
    }

    /**
     * Large 'xl' column
     *
     * @param integer $size Number of xl columns, a value between 1 and 12
     *
     * @return Column
     */
    public function xl(int $size): Column
    {
        $this->helper->xl($size);

        return $this;
    }

    /**
     * Large 'xs' column
     *
     * @param integer $size Number of xs columns, a value between 1 and 12
     *
     * @return Column
     */
    public function xs(int $size): Column
    {
        $this->helper->xs($size);

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
