<?php

use UnderScorer\Core\Http\Router;
use WPK\Modules\Admin\Http\Controllers\SaveSettingsController;

/**
 * @var Router $router
 */
$router
    ->route()
    ->post()
    ->match( '/smth/config' )
    ->controller( SaveSettingsController::class );
