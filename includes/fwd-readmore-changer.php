<?php 


// change excerpt
function mycustom_excerpt_length($length)
{
  $options = get_option('fwdreadmore_option');
  return $options['length'];

}
add_filter('excerpt_length', 'mycustom_excerpt_length', 999);
// Changing read more

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more)
{
  global $post;
  $options = get_option('fwdreadmore_option');
  return '<a class="' . $options['animation'] . '" href="' . get_permalink($post->ID) . '">' . $options['text'] . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
