<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Query\Builder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->registerQueryBuilderMacros();
    }

    public function registerQueryBuilderMacros()
    {
        Builder::macro('addSubSelect', function ($column, $query) {
            if (is_null($this->columns)) {
                $this->select($this->from.'.*');
            }
            return $this->selectSub($query, $column);
        });
    }
}
