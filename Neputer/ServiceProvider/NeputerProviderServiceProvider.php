<?php


namespace Neputer\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use Neputer\Command\CustomsCommand;

class NeputerProviderServiceProvider extends ServiceProvider
{
   public function register()
   {

   }

    public function boot()
    {
        $this->commands(CustomsCommand::class);
        $this->loadRoutesFrom(base_path('Neputer/route.php'));
        $this->mergeConfigFrom(base_path('Neputer/config/neputer.php'),'neputer');
    }
}
