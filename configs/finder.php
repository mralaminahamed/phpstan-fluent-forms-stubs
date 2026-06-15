<?php

use StubsGenerator\Finder;

return Finder::create()
    ->in( array(
        'source/fluentform',
    ) )
    ->append(
        Finder::create()
            ->in(['source/fluentform'])
            ->files()
            ->depth('< 1')
            ->path('fluentform.php')
    )
    // ->notPath('customizer')
    // ->notPath('debug')
    ->sortByName(true)
;
