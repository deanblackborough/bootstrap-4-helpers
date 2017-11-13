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
     * Instantiate and return the Bootstrap 4 Jumbotron view helper
     *
     * @param string $heading
     * @param string $content
     *
     * @return Jumbotron
     */
    public static function jumbotron(string $heading, string $content) : Jumbotron
    {
        $helper = new Jumbotron();
        return $helper->helper($heading, $content);
    }
}
