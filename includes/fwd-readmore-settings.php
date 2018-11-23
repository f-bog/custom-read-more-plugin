<?php

function fwdreadmore_settings()
{
    // If plugin settings don't exist, then create them
  if (!get_option('fwdreadmore_settings')) {
    add_option('fwdreadmore_settings');
  }


  add_settings_section(
  // Unique identifier for the section
    'fwdreadmore_settings_section',
  // Section Title
    __('FWD Read More Settings', 'fwdreadmore'),
  // Callback for an optional description
    'fwdreadmore_settings_section_callback',
  // Admin page to add section to
    'fwdreadmore'
  );

// field for custom text
  add_settings_field(
    'fwdreadmore_settings_custom_text',
    __('Custom Read More Text', 'fwdreadmore'),
    'fwdreadmore_settings_custom_text_callback',
    'fwdreadmore',
    'fwdreadmore_settings_section'
  );

// field for custom excerpt 
  add_settings_field(
    'fwdreadmore_settings_custom_length',
    __('Custom Excerpt Length', 'fwdreadmore'),
    'fwdreadmore_settings_custom_length_callback',
    'fwdreadmore',
    'fwdreadmore_settings_section'
  );
// field for hover effects drop down menu 
  add_settings_field(
    'fwdreadmore_settings_hover_effect',
    __('Select hover effect for read more link', 'fwdreadmore'),
    'fwdreadmore_settings_hover_effect_callback',
    'fwdreadmore',
    'fwdreadmore_settings_section',
    [
      'option_one' => 'spread',
      'option_two' => 'up',
      'option_three' => 'pulse'
    ]
  );

  register_setting(
    'fwdreadmore_settings',
    'fwdreadmore_settings'
  );

}
add_action('admin_init', 'fwdreadmore_settings');

function fwdreadmore_settings_section_callback()
{

  esc_html_e('Customize read more text and excerpt length', 'fwdreadmore');

}
// callback function for custom text
function fwdreadmore_settings_custom_text_callback()
{

  $options = get_option('fwdreadmore_settings');

  $custom_text = '';
  if (isset($options['custom_text'])) {
    $custom_text = esc_html($options['custom_text']);
  }

  echo '<input type="text" id="fwdreadmore_customtext" name="fwdreadmore_settings[custom_text]" value="' . $custom_text . '" />';

}
// callback function for custom excerpt length
function fwdreadmore_settings_custom_length_callback()
{

  $options = get_option('fwdreadmore_settings');

  $custom_length = '';
  if (isset($options['custom_length'])) {
    $custom_length = esc_html($options['custom_length']);
  }

  echo '<input type="number" id="fwdreadmore_customlength" name="fwdreadmore_settings[custom_length]" value="' . $custom_length . '" />';

}

function fwdreadmore_settings_hover_effect_callback($args)
{
  $options = get_option('fwdreadmore_settings');

  $custom_effect = '';
  if (isset($options['custom_effect'])) {
    $custom_effect = esc_html($options['custom_effect']);
  }
  $html = '<select id="fwdreadmore_settings_options" name="fwdreadmore_settings[custom_effect]">';

  $html .= '<option value="spread"' . selected($custom_effect, 'spread', false) . '>' . $args['option_one'] . '</option>';
  $html .= '<option value="up"' . selected($custom_effect, 'up', false) . '>' . $args['option_two'] . '</option>';
  $html .= '<option value="pulse"' . selected($custom_effect, 'pulse', false) . '>' . $args['option_three'] . '</option>';

  $html .= '</select>';

  echo $html;
}
