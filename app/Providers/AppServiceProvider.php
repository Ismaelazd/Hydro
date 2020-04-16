<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;


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
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('WEBSITE SETTINGS');
            $users = User::where('id','>',1)->get();
            $nb = count($users);
            $event->menu->add(
            [
                'text' => 'My Profil',
                'url'  => 'MyProfil',
                'icon' => 'fas fa-address-card',
            ],
            [
                'text' => 'Color',
                'url'  => 'color',
                'icon' => 'fas fa-palette',
            ],
            [ 
                'text' => 'Users',
                'url'  => 'users',
                'icon' => 'fas fa-fw fa-user',
                'label' => $nb
            ],
            [
                'text'    => 'About',
                'icon'    => 'fas fa-info-circle',
                'submenu' => [
                    [
                        'text' => 'Content',
                        'url'  => 'about',
                        'icon_color' => 'yellow',
                    ],
                    [
                        'text' => 'Add',
                        'url'  => 'about/create',
                        'icon_color' => 'green',
                    ],
                    
                ],
            ],
            [
                'text'    => 'Blog',
                'icon'    => 'fas fa-comments',
                'submenu' => [
                    [
                        'text' => 'Content',
                        'url'  => 'blog',
                        'icon_color' => 'yellow',
                    ],
                    [
                        'text' => 'Add',
                        'url'  => 'blog/create',
                        'icon_color' => 'green',
                    ],
                    
                ],
            ],
            [
                'text'    => 'Work',
                'icon'    => 'fas fa-folder-open',
                'submenu' => [
                    [
                        'text' => 'Content',
                        'url'  => 'work',
                        'icon_color' => 'yellow',
                    ],
                    [
                        'text' => 'Add',
                        'url'  => 'work/create',
                        'icon_color' => 'green',
                    ],
                    
                ],
            ]
        );
        });
    }
}
