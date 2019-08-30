<?php

use UnderScorer\Core\Http\Router;
use WPK\Modules\Admin\Http\Controllers\SaveSettingsController;
use WPK\Modules\Admin\Http\Middleware\AdminAccess;

/**
 * @var Router $router
 */
$router
    ->route()
    ->post()
    ->match( '/smth/config' )
    ->middleware( AdminAccess::class )
    ->controller( SaveSettingsController::class );
