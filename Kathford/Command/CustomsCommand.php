<?php

namespace Kathford\Command;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CustomsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kathford:generate {CLASS_NAME}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create Model, Controller, View, Services ';
    protected $fileManager;
    protected $config;


    public function __construct()
    {
        if (!file_exists('Kathford/Controller'))
        {
            mkdir(base_path('Kathford/Controller'));
            mkdir(base_path('Kathford/Controller/Admin'));
        }

        if(!file_exists('Kathford/Entities'))
            mkdir(base_path('Kathford/Entities'));

        if(!file_exists('Kathford/Foundation/Services'))
            mkdir(base_path('Kathford/Foundation/Services'));

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->Check();
    }
    public function Check()
    {
        $class_name  = strtolower($this->argument('CLASS_NAME'));
        $this->makeController($class_name);
        $this->makeModel($class_name);
        $this->makeService($class_name);
        $this->makeView($class_name);
    }

    private function makeController(string $class_name)
    {
        $controllerString = file_get_contents(base_path('Kathford/Foundation/Mixing/controller.create.stub'));
        $controllerString = str_replace(["{{ Controller }}","{{ Model }}"], ucfirst($class_name),  $controllerString);
        $controllerString = str_replace(["{{variable}}"], strtolower($class_name),  $controllerString);
        File::put(base_path('Kathford'. DIRECTORY_SEPARATOR .'Controller' . DIRECTORY_SEPARATOR .'Admin'.DIRECTORY_SEPARATOR. ucfirst($class_name) . 'Controller.php'), $controllerString);
        $this->info(ucfirst($class_name) . ' Controller Created .');
    }

    /**
     * @param string $class_name
     */
    private function makeModel(string $class_name)
    {
        $modelString = file_get_contents(base_path('Kathford/Foundation/Mixing/model.create.stub'));
        $modelString = str_replace(["{{ Model }}"], ucfirst($class_name),  $modelString);
        File::put(base_path('Kathford'. DIRECTORY_SEPARATOR .'Entities' . DIRECTORY_SEPARATOR . ucfirst($class_name) . '.php'), $modelString);
        $this->info(ucfirst($class_name) . ' Model Created .');
    }

    /**
     * @param string $class_name
     */
    private function makeService(string $class_name)
    {
        $serviceString = file_get_contents(base_path('Kathford/Foundation/Mixing/service.stub'));
        $serviceString = str_replace(["{CLASS_NAME}","{VAR_CLASS_NAME}"], ucfirst($class_name),  $serviceString);
        $serviceString = str_replace(["{VAR_CLASS_NAME}"], '$'.strtolower($class_name),  $serviceString);
        File::put(base_path('Kathford'. DIRECTORY_SEPARATOR .'Services' . DIRECTORY_SEPARATOR . ucfirst($class_name) . 'Service.php'), $serviceString);
        $this->info(ucfirst($class_name) . ' Service Created .');
    }

    private function makeView( string $class_name)
    {
        $this->indexPage($class_name);
        $this->editPage($class_name);
        $this->createPage($class_name);
        $this->customForm($class_name);
        $this->tablePage($class_name);
        $this->scriptPage($class_name);
        $this->showPage($class_name);

    }

    public function indexPage($class_name)
    {
        $viewString = file_get_contents(base_path('Kathford/Foundation/stubs/views/index.blade.stub'));
        if (!file_exists(resource_path('views' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . strtolower($class_name))))
            mkdir(resource_path('views' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . strtolower($class_name)));
        if (!file_exists(resource_path('views' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . strtolower($class_name).DIRECTORY_SEPARATOR.'partials')))
            mkdir(resource_path('views' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . strtolower($class_name).DIRECTORY_SEPARATOR.'partials'));
        $viewString = str_replace(["{base}"], strtolower($class_name),  $viewString);
        File::put(resource_path('views' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . strtolower($class_name) . DIRECTORY_SEPARATOR . 'index.blade.php'), $viewString);

    }

    public function editPage($class_name)
    {
        $edit = file_get_contents(base_path('Kathford/Foundation/stubs/views/edit.blade.stub'));
        $edit = str_replace(["{SMALL_CASE_CLASS_NAME}"], strtolower($class_name), $edit);
        $edit = str_replace(["{base}"], strtolower($class_name),  $edit);
        File::put(resource_path('views' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . strtolower($class_name) . DIRECTORY_SEPARATOR . 'edit.blade.php'), $edit);
    }

    public function createPage($class_name)
    {
        $create = file_get_contents(base_path('Kathford/Foundation/stubs/views/create.blade.stub'));
        $create = str_replace(["{base}"], strtolower($class_name),  $create);
        File::put(resource_path('views' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . strtolower($class_name) . DIRECTORY_SEPARATOR . 'create.blade.php'), $create);
    }

    public function createForm($class_name)
    {
        $form = file_get_contents(base_path('Kathford/Foundation/stubs/views/form.blade.stub'));
        File::put(resource_path('views' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . strtolower($class_name) . DIRECTORY_SEPARATOR . 'form.blade.php'), $form);
    }

    public function tablePage($class_name)
    {
        $table = file_get_contents(base_path('Kathford/Foundation/stubs/views/table.blade.stub'));
        File::put(resource_path('views' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . strtolower($class_name) . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'table.blade.php'), $table);
    }

    public function scriptPage($class_name)
    {
        $script = file_get_contents(base_path('Kathford/Foundation/stubs/views/script.blade.stub'));
        File::put(resource_path('views' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . strtolower($class_name) . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'script.blade.php'), $script);
    }
    public function customForm($class_name)
    {
        $form = file_get_contents(base_path('Kathford/Foundation/stubs/views/filter-form.blade.stub'));
        File::put(resource_path('views' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . strtolower($class_name) . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'filter-form.blade.php'), $form);
    }
    public function showPage($class_name)
    {
        $show = file_get_contents(base_path('Kathford/Foundation/stubs/views/show.blade.stub'));
        $show = str_replace(["{base}"], strtolower($class_name),  $show);
        File::put(resource_path('views' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . strtolower($class_name) . DIRECTORY_SEPARATOR . 'show.blade.php'), $show);
        $this->info(ucfirst($class_name) . ' View Created .');
    }
}
