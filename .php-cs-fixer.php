<?php

declare(strict_types=1);

use PhpCsFixer\Finder;

$finder = Finder::create()
                ->in(__DIR__.DIRECTORY_SEPARATOR.'data')
                ->ignoreDotFiles(true)
                ->ignoreVCS(true);

return Phonyland\styles($finder);
