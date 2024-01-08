<?php

use Orchestra\Testbench\TestCase;
use Sysvale\StatusChecker\StatusCheckerServiceProvider;

class StatusCheckerTest extends TestCase
{
	/**
     * add the package provider
     *
     * @param  Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            StatusCheckerServiceProvider::class,
        ];
    }

	public function testGetSuccessfullResponse(): void
	{
		$this->get('/health/check')
			->assertOk()
			->assertJson(['status' => 'ok']);
	}
}
