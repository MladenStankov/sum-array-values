<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPhpSets()
    ->withPaths([__DIR__.'/app', __DIR__.'/tests'])
    ->withSkip([]);
