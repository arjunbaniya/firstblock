<?php
/**
* Plugin Name: First Block
* Plugin URI: www.amplethemes.com
* Description: My first plugin date_modify
* Author: Arjun
* Author URI: www.amplethemes.com
*/


function blocks_course_firstblock_init(){

    register_block_type_from_metadata(__DIR__);
    wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);    
}
add_action( "init", "blocks_course_firstblock_init" );