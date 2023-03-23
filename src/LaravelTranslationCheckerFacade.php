<?php

namespace LaravelTranslationChecker\LaravelTranslationChecker;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Test\Test\Skeleton\SkeletonClass
 */
class LaravelTranslationCheckerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel translation checker';
    }
}
