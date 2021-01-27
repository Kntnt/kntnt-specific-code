<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Specific Code
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Provides code specific for Kntnt's WPaaS.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


defined( 'ABSPATH' ) || die;

add_filter( 'kntnt-remove-meta-boxes', function ( $hide_meta_boxes ) {
    return array_merge_recursive( $hide_meta_boxes, [
        'dashboard' => [
            'dashboard_site_health',
        ],
        'post' => [
            'categorydiv',
            'tagsdiv-post_tag',
            'commentstatusdiv',
            'commentsdiv',
            'postcustom',
            'revisionsdiv',
            'tagsdiv-collection',
        ],
    ] );
} );
