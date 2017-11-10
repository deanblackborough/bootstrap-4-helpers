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
     * Return the generated HTML
     *
     * @return string
     */
    public function render() : string
    {
        return $this->helper;
    }
}
