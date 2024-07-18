<?php

/*
    Plugin Name: Wordpress prueba Are You Paying Atention
    Description: Give your readers a multiple choice question.
    Version: 1.0
    Author: Rodrigo
    Author URI: https://github.com/RodrigoMejiaDiaz/
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class AreYouPayingAttention {
  function __construct() {
    add_action('init', array($this, 'adminAssets'));
  }

  function adminAssets() {
    register_block_type(__DIR__, array(
      'render_callback' => array($this, 'theHTML')
    ));
  }

  function theHTML($attributes) {
    ob_start(); ?>
<div class="paying-attention-update-me">
    <pre style="display: none;"><?php echo wp_json_encode($attributes) ?></pre>
</div>
<?php return ob_get_clean();
  }
}

$areYouPayingAttention = new AreYouPayingAttention();