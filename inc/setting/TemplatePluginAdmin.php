<?php


class TemplatePluginAdmin
{

    private $pluginName;

    private function __construct()
    {

        $this->createLeftMenu();
        $this->loadScript();
    }

    /**
     * Add plugin in the left admin menu
     */
    private function createLeftMenu()
    {
        add_action('admin_menu', array($this, 'add_admin_menu'));
    }


    /**
     * Load script and css for admin page
     */
    private function loadScript()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue_private'));
    }

    public static function make($pluginName)
    {
        $adminSetting = new self();
        $adminSetting->pluginName = $pluginName;
    }


    /**
     * Load js and css files for admin page
     */
    public function enqueue_private()
    {
        wp_enqueue_style('style', plugins_url('../css/admin/style.css', __FILE__));
        wp_enqueue_script('script', plugins_url('../js/admin/script.js', __FILE__));
    }


    /**
     * Creation admin menu
     */
    public function add_admin_menu()
    {
        add_menu_page("$this->plugin  plugin", $this->plugin, 'manage_options',
            "$this->plugin _plugin",
            array($this, 'admin_index'),
            'dashicons-media-spreadsheet', 110
        );
    }


    /**
     * Admin page of your plugin
     */
    public function admin_index($pl)
    {
        require_once plugin_dir_path(__FILE__) . '../template/adminPage.php';
    }
}