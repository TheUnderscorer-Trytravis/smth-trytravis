<?php

use UnderScorer\Core\Enqueue;

/**
 * @var Enqueue $enqueue
 */

$enqueue->enqueueScript( [
    'slug'     => 'smth-styles',
    'fileName' => 'smth-styles',
] );

$enqueue->enqueueScript( [
    'fileName' => 'smth-app',
    'slug'     => 'smth-main-script',
    'inFooter' => true,
] );
