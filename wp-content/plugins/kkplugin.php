<?php
/*
Plugin Name: KK's Plugin
Plugin URI: kirr.azurewebsites.net
Description: plugin fun
Author: kkirr
Version: 1.0
*/

$plugins = array();
$active = array();

function active_plugins() {
  //our function, called each time the dashboard loads
  global $plugins, $active;

  $plugins = get_plugins();

  foreach ($plugins as $file => $data) {
    //Examine each plugin
    if (is_plugin_active($file)) {
      $active[$file] =
        get_plugin_data(WP_PLUGIN_DIR. "/file");
    }
  }
    wp_add_dashboard_widget('active_plugins', 'active Plugins', 'active_plugins_dashboard_widget');
}

function active_plugins_dashboard_widget() {
  //display our dashboard widget
  global $plugins, $active;

  print("<ul>");

  foreach ($active as $plugin) {
    print("<li>{$plugin['Title']} by {$plugin['Author']} @ {$plugin['Version']}</li>");
  }
  print ("</ul>")
}

add_action('wp_dashboard_setup', 'active_plugins');
?>
