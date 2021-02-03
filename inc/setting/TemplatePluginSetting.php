<?php

require_once "TemplatePluginPublic.php";
require_once "TemplatePluginAdmin.php";
require_once "TemplatePluginShortCode.php";

class TemplatePluginSetting
{

    /**
     * TemplatePluginSetting constructor.
     * @param $pluginName
     */
    private function __construct($pluginName)
    {
        TemplatePluginAdmin::make($pluginName);
        TemplatePluginPublic::make($pluginName);
        TemplatePluginShortCode::make();
    }


    /**
     * Start plugin
     * @param $pluginName
     */
    public static function make($pluginName)
    {
        new self($pluginName);
    }
}