<?php
/*
Plugin Name: Video Downloader for X
Plugin URI: https://x-downloader.com/api
Description: Integrate download buttons next to embedded tweets and X posts, enabling users to download videos in MP4 and MP3 format.
Version: 1.0.4
Author: X Downloader
Author URI: https://x-downloader.com
License: GPLv2 or later
Text Domain: video-downloader-for-x
*/

// Prevent direct file access
if ( ! defined( 'WPINC' ) ) {
 die;
}

// Define the version of the plugin
define( 'VIDEO_DOWNLOADER_FOR_X_VERSION', '1.0.4' );
define( 'VIDEO_DOWNLOADER_FOR_X_PLUGIN_DIR', plugin_dir_url( __FILE__ ) );


/**
 * The core plugin class that defines all the functionality.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-video-downloader-for-x.php';

/**
 * Begins execution of the plugin.
 */
function run_video_downloader_for_x() {
 $plugin = new Video_Downloader_For_X();
 $plugin->run();
}
run_video_downloader_for_x();
?>