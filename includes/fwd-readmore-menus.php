<?php
// adds setting page
function fwdreadmore_settings_page()
{
  add_menu_page(
    'FWD Read More',
    'FWD Read More',
    'manage_options',
    'fwdreadmore',
    'fwdreadmore_settings_page_markup',
    'dashicons-wordpress-alt',
    100
  );
}
add_action('admin_menu', 'fwdreadmore_settings_page', 100);

// Adds markup to settings page
function fwdreadmore_settings_page_markup()
{
    // Double check user capabilities
  if (!current_user_can('manage_options')) {
    return;
  }
  include(FWDREADMOREPLUGIN_DIR . 'templates/admin/settings-page.php');

}

// Add a link to the settings page 
function fwdreadmore_add_settings_link($links)
{
  $settings_link = '<a href="admin.php?page=fwdreadmore">' . __('Settings', 'fwdreadmore') . '</a>';
  array_push($links, $settings_link);
  return $links;
}
$filter_name = "plugin_action_links_" . plugin_basename(__FILE__);
add_filter($filter_name, 'fwdreadmore_add_settings_link');
