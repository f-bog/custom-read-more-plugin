<?php

// Load JS on all admin pages
function fwdreadmore_admin_scripts($hook)
{

  wp_register_script(
    'fwdreadmore-admin',
    FWDREADMOREPLUGIN_URL . 'admin/js/fwd-readmore-admin.js',
    ['jquery'],
    time()
  );
  wp_localize_script('fwd-readmore-admin', 'fwdreadmore', [
    'hook' => $hook
  ]);

  if ('toplevel_page_fwdreadmore' == $hook) {
    wp_enqueue_script('fwdreadmore-admin');
  }

}
add_action('admin_enqueue_scripts', 'fwdreadmore_admin_scripts', 100);


// Load JS on the frontend
function fwdreadmore_frontend_scripts()
{

  wp_register_script(
    'fwdreadmore-frontend',
    FWDREADMOREPLUGIN_URL . 'frontend/js/fwd-readmore-frontend.js',
    [],
    time()
  );

  if (is_single()) {
    wp_enqueue_script('fwdreadmore-frontend');
  }

}
add_action('wp_enqueue_scripts', 'fwdreadmore_frontend_scripts', 100);