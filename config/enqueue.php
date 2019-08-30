<?php

use UnderScorer\Core\Enqueue;

/**
 * @var Enqueue $enqueue
 */

$enqueue->enqueueStyle( [
    'slug'     => 'smth-style',
    'fileName' => 'styles',
] );

$enqueue->enqueueScript( [
    'fileName' => 'smth-app',
    'slug'     => 'smth-main-script',
    'inFooter' => true,
] );
