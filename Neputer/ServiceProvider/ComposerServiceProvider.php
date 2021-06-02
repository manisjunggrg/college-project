<?php


namespace Neputer\ServiceProvider;


use Carbon\Laravel\ServiceProvider;
use Neputer\Services\LayoutComposer;

class ComposerServiceProvider extends ServiceProvider
{
    protected $main_page = 'admin.layouts.includes.breadcrumb';
    public function boot()
    {
       view()->composer($this->main_page , LayoutComposer::class);
    }


}
