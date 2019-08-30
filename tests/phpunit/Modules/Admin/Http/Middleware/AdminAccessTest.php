<?php

namespace WPK\Tests\Modules\Admin\Http\Middleware;

use UnderScorer\Core\Tests\Mock\Http\MockResponse;
use UnderScorer\Core\Tests\TestCase;
use WPK\Modules\Admin\Http\Middleware\AdminAccess;

final class AdminAccessTest extends TestCase
{

    public function testHandle()
    {
        $middleware = self::$app->make( AdminAccess::class );
        $response   = new MockResponse();
    }
}
