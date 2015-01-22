<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
|
| ----------------------------------------------------------------------------- 
| my_display.php
| ----------------------------------------------------------------------------- 
*/

/**
 * Boldens every capitalized word in p elements with the lead class name.
 * Modify the array $pagebodies with the views to implement this hook on.
 */
function bold_text() {
  $CI = &get_instance();
  $pagebodies = array(
    'justone',
  );

  if (in_array($CI->get_pagebody(), $pagebodies)) {
    $target  = '/(<p\s+class="lead">)(.*)?(<\/p>)/i';
    $pattern = '/\b([A-Z]\w*)/';
    $output  = $CI->output->get_output();

    if (preg_match($target, $output, $matches)) {
      $bolded = preg_replace($pattern, '<strong>${1}</strong>', $matches[0]);
      $output = preg_replace($target, $bolded, $output);
    }
    $CI->output->set_output($output);
  }
  $CI->output->_display();
}

/* End of file my_display.php */
/* Location ./application/hooks */
