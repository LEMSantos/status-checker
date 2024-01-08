<?php

namespace Sysvale\StatusChecker;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class StatusCheckerServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->registerResources();
	}

	private function registerResources(): void
	{
		Route::group($this->routeConfiguration(), function () {
			$this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
		});
	}

	private function routeConfiguration(): array
	{
		return [
			'namespace' => 'Sysvale\StatusChecker\Http\Controllers',
		];
	}
}
