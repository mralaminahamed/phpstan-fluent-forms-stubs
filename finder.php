<?php

return \StubsGenerator\Finder::create()
    ->in( array(
        'source/fluentform',
    ) )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/fluentform'])
            ->files()
            ->depth('< 1')
            ->path('fluentform.php')
    )
    // ->notPath('customizer')
    // ->notPath('debug')
    ->sortByName(true)
;
