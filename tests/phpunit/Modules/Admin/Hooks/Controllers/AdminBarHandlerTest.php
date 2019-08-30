<?php

namespace WPK\Tests\Modules\Admin\Hooks\Controllers;

use Illuminate\Contracts\Container\BindingResolutionException;
use UnderScorer\Core\Tests\TestCase;
use WP_Admin_Bar;
use WPK\Modules\Admin\Hooks\Controllers\AdminBarHandler;

/**
 * Class AdminBarHandlerTest
 * @package WPK\Tests\Modules\Admin\Hooks\Controllers
 */
final class AdminBarHandlerTest extends TestCase
{

    /**
     * @throws BindingResolutionException
     */
    public function testHandle(): void
    {
        set_current_screen( 'front' );

        do_action( 'init' );
        require_once ABSPATH . '/wp-includes/class-wp-admin-bar.php';

        $this->login( 'administrator' );

        $adminBar   = new WP_Admin_Bar();
        $controller = self::$app->make( AdminBarHandler::class );

        $controller->handle( $adminBar );

        $this->assertNotEmpty( $adminBar->get_node( 'smth_activator' ) );
    }
}
