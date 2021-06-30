<?php


namespace Kathford\ServiceProvider;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Kathford\Command\CustomsCommand;

class KathfordServiceProvider extends ServiceProvider
{
    public function register()
   {

   }

    public function boot()
    {
        $this->commands(CustomsCommand::class);
        $this->loadRoutesFrom(base_path('Kathford/route.php'));
        $this->mergeConfigFrom(base_path('Kathford/config/Kathford.php'),'Kathford');
    }
}
