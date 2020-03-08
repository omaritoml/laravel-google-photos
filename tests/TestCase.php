<?php

namespace Revolution\Google\Photos\Tests;

use PulkitJalan\Google\Facades\Google;
use PulkitJalan\Google\GoogleServiceProvider;
use Revolution\Google\Photos\Facades\Photos;
use Revolution\Google\Photos\Providers\PhotosServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            PhotosServiceProvider::class,
            GoogleServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Photos' => Photos::class,
            'Google' => Google::class,
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        //
    }
}
