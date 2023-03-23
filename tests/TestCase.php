<?php

declare(strict_types=1);

namespace Tests;

use Gajus\Dindent\Indenter;
use LaravelTranslationChecker\LaravelTranslationChecker\LaravelTranslationCheckerServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelTranslationCheckerServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
