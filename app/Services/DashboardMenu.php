<?php

namespace App\Services;

use Spatie\Menu\Laravel\Link;
use Spatie\Menu\Laravel\Menu;

class DashboardMenu
{
    public function register()
    {
        $this->registerDashboardNav();
    }

    protected function registerDashboardNav()
    {
        Menu::macro('main', function () {
            return Menu::new ()
                ->add(Link::to('/', 'Home'))
                ->setActiveFromRequest();
        });
    }
}
