<?php

namespace SMTH;

/*
Plugin Name: Show Me The Hooks!
Description: Have you ever wonder what hooks you need to use to customize your theme or plugin? Then this plugin comes to your rescue!
Author: Przemysław Żydek
Author URI: https://github.com/TheUnderScore
Version: 0.1
Text Domain: smth
*/

use Exception;
use UnderScorer\Core\AcfSettings;
use UnderScorer\Core\App;
use UnderScorer\Core\Settings;

if ( ! defined( 'CORE_SLUG' ) ) {
    define( 'CORE_SLUG', 'smth' );
}

$dir  = __DIR__;
$slug = CORE_SLUG;

// Require composer autoloader
require_once $dir . '/vendor/autoload.php';

try {

    $settings = function_exists( 'get_field' ) ?
        new AcfSettings( $slug ) :
        new Settings( $slug );

    $app = new App(
        $slug,
        __FILE__,
        $settings
    );

    return $app;

} catch ( Exception $e ) {
    echo $e->getMessage();
}
