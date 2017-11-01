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
    static $helper;

    /**
     * Opening call for view helper, the minimum parameters required to create component
     *
     * @param string $heading
     * @param string $content
     *
     * @return void
     */
    static public function helper(string $heading, string $content)
    {
        self::$helper = new Bootstrap4Jumbotron();
        self::$helper->__invoke($heading, $content);
    }

    /**
     * Return the generated HTML
     *
     * @return string
     */
    public static function render() : string
    {
        return self::$helper;
    }
}
