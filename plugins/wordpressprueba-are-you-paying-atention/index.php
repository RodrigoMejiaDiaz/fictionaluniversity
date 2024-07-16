<?php

/*
    Plugin Name: Wordpress prueba Are You Paying Atention
    Description: Give your readers a multiple choice question.
    Version: 1.0
    Author: Rodrigo
    Author URI: https://github.com/RodrigoMejiaDiaz/
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class AreYouPayingAtention 
{
    function __construct() {
        add_action('init', array($this, 'adminAssets'));
    }

    function adminAssets() {
        wp_register_style('quizeditcss', plugin_dir_url(__FILE__) . 'build/index.css');
        wp_register_script('ournewblocktype', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', "wp-element", 'wp-editor'));
        register_block_type('ourplugin/are-you-paying-atention',array(
            'editor_script' => 'ournewblocktype',
            'editor_style' => 'quizeditcss',
            'render_callback' => array($this, 'theHTML')
        ));
    }

    function theHTML($attributes) {
        if (!is_admin()) {
            wp_enqueue_script('attentionFrontend', plugin_dir_url(__FILE__) . 'build/frontend.js', array('wp-element'));
            wp_enqueue_style('attentionFrontendStyles', plugin_dir_url(__FILE__) . 'build/frontend.css');
        }

        ob_start(); ?>
<h3>Today the sky is completely <?php echo esc_html($attributes['skyColor']) ?> and the grass is
    <?php echo esc_html($attributes['grassColor']) ?>!!!
</h3>
<?php return ob_get_clean();
    }
}

$areYouPayingAtention = new AreYouPayingAtention();