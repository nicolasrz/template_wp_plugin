<?php

/**
 * @package name-of-plugin
 * @version 1.0.0
 */
/*
Plugin Name: template plugin
Plugin URI: -
Description:
Author:
Version: 1.0.1
Author URI:
*/


if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

if(!class_exists('TemplatePluginSetting')){
/** Start plugin */
    require_once 'inc/setting/TemplatePluginSetting.php';
    TemplatePluginSetting::make("tempateplugin");
}

