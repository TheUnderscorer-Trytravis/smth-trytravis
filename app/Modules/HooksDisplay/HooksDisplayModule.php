<?php

namespace WPK\modules\HooksDisplay;

use UnderScorer\Core\Module;
use WPK\modules\HooksDisplay\Hooks\Controllers\RenderHooksHandler;

/**
 * Class HooksDisplayModule
 * @package WPK\modules\HooksDisplay
 */
class HooksDisplayModule extends Module
{

    /**
     * @var array
     */
    protected $controllers = [
        RenderHooksHandler::class,
    ];

    /**
     * Performs module bootstrap
     *
     * @return void
     */
    protected function bootstrap(): void
    {
        $this->menu->setRegister( false );
    }
}
