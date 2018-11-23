<?php 


// change excerpt
function mycustom_excerpt_length($length)
{
  $options = get_option('fwdreadmore_settings');
  return $options['custom_length'];

}
add_filter('excerpt_length', 'mycustom_excerpt_length', 999);
// Changing read more

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more)
{
  global $post;
  $options = get_option('fwdreadmore_settings');
  return '<a class="' . $options['custom_effect'] . '" href="' . get_permalink($post->ID) . '">' . $options['custom_text'] . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
