<?php

/**
 * Factory for the Bootstrap 4 view helpers
 *
 * @package DBlackborough\Bootstrap4Helpers
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Dean Blackborough
 * @license https://github.com/deanblackborough/bootstrap-4-helpers/blob/master/LICENSE
 */
class ViewHelper
{
    /**
     * Instantiate and return the Bootstrap 4 Badge view helper
     *
     * @param string $label Label for the badge
     *
     * @return Badge
     */
    public static function badge(string $label) : Badge
    {
        $helper = new Badge();
        return $helper->helper($label);
    }

    /**
     * Instantiate and return the Bootstrap 4 Button view helper
     *
     * @param string $label Label for the button
     *
     * @return Button
     */
    public static function button(string $label) : Button
    {
        $helper = new Button();
        return $helper->helper($label);
    }

    /**
     * Instantiate and return the Bootstrap 4 Jumbotron view helper
     *
     * @param string $heading Heading text for jumbotron
     * @param string $content Content to display within the jumbotron
     *
     * @return Jumbotron
     */
    public static function jumbotron(string $heading, string $content) : Jumbotron
    {
        $helper = new Jumbotron();
        return $helper->helper($heading, $content);
    }

    /**
     * Instantiate and return the Bootstrap 4 Progress bar view helper
     *
     * @param integer $value Current progress bar value
     *
     * @return ProgressBar
     */
    public static function progressBar(int $value)
    {
        $helper = new ProgressBar();
        return $helper->helper($value);
    }
}
