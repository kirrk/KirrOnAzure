<?php
/*
Plugin Name: Active Plugin Dashboard Widget
Plugin URI: kirr.azurewebsites.net
Description: Add dashboard widget displaying active siteplugins
Author: kkirr
Version: 1.0
*/

   $plugins = array();
   $active = array();

function active_plugins() {
    global $plugins, $active;

    $plugins = get_plugins();

    foreach ($plugins as $file => $data) {
      // examine each plugin
      if (is_plugin_active($file)) {
        $active[$file] =
          get_plugin_data(WP_PLUGIN_DIR. "/$file");
      }
    }
    wp_add_dashbaord_widget('active_plugins', 'Active Plugins', 'active_plugins_dashboard_widget');
}

function active_plugins_dashboard_widget() {
   //Display our dashboard widget
  global $plugins, $active;

  print("<ul>");

  foreach ($active as $plugin) {
    print("<li>{$plugin['Title']} by {$plugin['Author']} | {$plugin['Version']}</li>");
  }

  print("</ul>");
}

add_action('wp_dashbaord_setup', 'active_plugins');


?>
