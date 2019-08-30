<?php

namespace WPK\Modules\HooksDisplay\Utils;

/**
 * Class HookRenderer
 * @package WPK\Modules\HooksDisplay\Utils
 */
class HookAnalyzer
{

    /**
     * @var string
     */
    protected $tag = '';

    /**
     * HookRenderer constructor.
     *
     * @param string $tag
     */
    public function __construct( string $tag )
    {
        $this->tag = $tag;
    }

    /**
     * @return HookDetails
     */
    public function getTagAttributes(): HookDetails
    {
        // :/
        global $wp_actions;

        $attributes = [
            'ID'   => $this->tag,
            'type' => isset( $wp_actions[ $this->tag ] ) ? 'action' : 'filter',
        ];
        $attributes += $this->getHookLocationWithArgs();

        return new HookDetails( $attributes );
    }

    /**
     * @return array
     */
    protected function getHookLocationWithArgs(): array
    {
        $trace = debug_backtrace();

        /*
         * 0 - self::getTagAttributes
         * 1 - Place in which this class was called
         * 2 - ^ hook of from this place
         * 3 - WP Core file
         * 4 - WP Core file
         * 5- File in which hook is placed
         * */
        $hookTrace = $trace[ 5 ];
        $args      = $hookTrace[ 'args' ];

        array_pop( $args );

        return [
            'location' => sprintf( '%s:%s', $hookTrace[ 'file' ], $hookTrace[ 'line' ] ),
            'args'     => $args,
        ];
    }

}
