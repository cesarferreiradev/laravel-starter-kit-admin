<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TallStackUi\Facades\TallStackUi;

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
        TallStackUi::personalize()
            ->toast()
            ->block('wrapper.first', 'pointer-events-none fixed top-16 z-50 right-[-70px] min-w-[40%] gap-y-2 px-4 py-4 flex flex-col gap-y-2');

        TallStackUi::personalize()
            ->stats()
            ->block('wrapper.first','dark:bg-dark-700 flex w-full flex-col rounded-lg bg-white border border-slate-200');
    }
}
