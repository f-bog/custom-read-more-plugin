<?php

// Function for learning how to add options
// SQL Query: SELECT * FROM changethis_options WHERE option_name = "fwdreadmore_option";
function fwdreadmore_options()
{
  $options = [];
  $options['text'] = ' ...Read More';
  $options['animation'] = 'readmore';
  $options['length'] = 50;

  if (!get_option('fwdreadmore_option')) {
    add_option('fwdreadmore_option', $options);
  }

  update_option('fwdreadmore_option', $options);
  // delete_option('fwdreadmore_option', $options);


}
add_action('admin_init', 'fwdreadmore_options');