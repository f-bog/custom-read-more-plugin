<?php 

// load CSS on all admin pages
function fwdreadmore_admin_styles($hook)
{

  wp_register_style(
    'fwdreadmore-admin',
    FWDREADMOREPLUGIN_URL . 'admin/css/fwd-readmore-admin-style.css',
    [],
    time()
  );

  if ('toplevel_page_fwdreadmore' == $hook) {
    wp_enqueue_style('fwdreadmore-admin');
  }

}
add_action('admin_enqueue_scripts', 'fwdreadmore_admin_styles');

// Load CSS on the front end
function fwdreadmore_frontend_styles()
{

  wp_enqueue_style(
    'fwdreadmore-frontend',
    FWDREADMOREPLUGIN_URL . 'frontend/css/fwd-readmore-frontend-style.css',
    [],
    time()
  );

  // if (is_single()) {
  //   wp_enqueue_style('fwdreadmore-frontend');
  // }
}
add_action('wp_enqueue_scripts', 'fwdreadmore_frontend_styles', 100);