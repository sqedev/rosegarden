<?php


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Input group to password protected form
 */
if (!function_exists('rosegarden_pw_form')) :
  function rosegarden_pw_form() {
    $output = '
        <form action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post" class="input-group pw_form mb-4">' . "\n"
              . '<input name="post_password" type="password" size="" class="form-control" placeholder="' . __('Password', 'rosegarden') . '"/>' . "\n"
              . '<input type="submit" class="btn btn-outline-primary input-group-text" name="Submit" value="' . __('Submit', 'rosegarden') . '" />' . "\n"
              . '</form>' . "\n";

    return $output;
  }

  add_filter("the_password_form", "rosegarden_pw_form");
endif;
