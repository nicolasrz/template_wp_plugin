<?php


class TemplatePluginPublic
{
    private $pluginName;

    private function __construct()
    {
        $this->loadScript();
    }

    public static function make($pluginName){
        $publicSetting = new self();
        $publicSetting->pluginName = $pluginName;
    }


    /**
     * Load script and css for admin page
     */
    private function loadScript()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_public'));
    }

    /**
     * Load js and css files for public page
     */
    public function enqueue_public()
    {
        wp_enqueue_script('script', plugins_url('../js/public/script.js', __FILE__));
        wp_enqueue_script('style', plugins_url('../css/public/style.css', __FILE__));
    }
}