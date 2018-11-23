<?php


function fwdreadmore_options()
{
  $options = [];


  if (!get_option('fwdreadmore_option')) {
    add_option('fwdreadmore_option', $options);
  }

  update_option('fwdreadmore_option', $options);
  // delete_option('fwdreadmore_option', $options);


}
add_action('admin_init', 'fwdreadmore_options');