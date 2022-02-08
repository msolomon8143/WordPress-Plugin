<?php

/*
 * Plugin Name:       MyPlugin
 * Plugin URI:        http://34.206.220.157/
 * Description:       Stuff
 * Version:           1.0
 * Author:            Michael S, Damar S, Benji D, Jasmine B
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path:       /languages
 */

//EOF
// exit if file is called directly
//Testing to see if the php works

if ( ! defined('ABSPATH')){
    exit;
} //EOF

add_action('wp_body_open', 'jmdb_head');
function jmdb_head(){
    echo '<h3 class="tb">Welcome to ' . get_bloginfo('name') . '</h3>';
    echo '<form method="post">
        <input type="submit" name="dark" value="Dark Mode"/>
        <input type="submit" name="light" value="Light Mode"/>
        </form>
        ';
     if(isset($_POST['dark'])) {
        jmdb_darkmode_css();
    }
    if(isset($_POST['light'])) {
        }
}

function jmdb_darkmode_css() {
    echo '
        <style>
        *, #site-header, #site-footer, .footer-nav-widgets-wrapper, input, body {
            color: #E0E1DD;
            background: #1B263B;
            border-color: #0D1B2A;
            outline-color: #0D1B2A;
        }
        a, .entry-title a {
            color: #778DA9;
        }
        h3.tb, input[type=submit] {
            background: #0D1B2A;
        }
        </style>
    ';
}

add_action('wp_print_styles', 'jmdb_css');

function jmdb_css() {
    echo '
        <style>
        h3.tb {color: #fff; margin: 0; padding: 30px; text-align: center; background: orange}
        </style>
    ';
}



add_action( 'wp_head', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<button type="button">Click Me!</button>';
}
?>