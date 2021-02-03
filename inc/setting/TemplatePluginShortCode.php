<?php


/**
 * Class TemplatePluginShortCode
 */
class TemplatePluginShortCode
{

    /**
     * TemplatePluginShortCode constructor.
     */
    private function __construct()
    {
        add_shortcode("name_of_shortcode", array($this, 'function_of_shortcode'));
    }

    /**
     *
     */
    public static function make()
    {
        new self();
    }


    /**
     * Creation of short code
     */
    public function function_of_shortcode()
    {
        // include template that will shown by the template
        require_once plugin_dir_path(__FILE__) . '../template/name_of_shortcode.php';
    }
}