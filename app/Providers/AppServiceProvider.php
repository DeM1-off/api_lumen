<?php

namespace App\Providers;

use App\Repositories\Company\CompanyRepositories;
use App\Repositories\Company\CompanyRepositoriesInterface;
use App\Services\Company\CompanyService;
use App\Services\Company\CompanyServiceInterface;
use App\Services\ResetPassword\ResetPasswordInterface;
use App\Services\ResetPassword\ResetPasswordService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CompanyRepositoriesInterface::class, CompanyRepositories::class);
        $this->app->bind(CompanyServiceInterface::class, CompanyService::class);
        $this->app->bind(ResetPasswordInterface::class, ResetPasswordService::class);
    }
}
