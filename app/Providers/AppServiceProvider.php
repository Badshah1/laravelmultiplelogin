<?php

namespace App\Providers;

use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use PhpOption\Tests\Repository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        Schema::defaultStringLength(191);

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $pages = [
                 [
                    'text' => 'Page 1 for Admin & Other User',
                    'url' => '#'
                ]
            ];

            if(auth()->user()->role == 1){
                $pages[] = [
                    'text' => 'Page 2 is for Admin',
                    'url' => '#'
                ];
            }

            $items = collect($pages);

            $event->menu->add(...$items);
        });
    }
}
