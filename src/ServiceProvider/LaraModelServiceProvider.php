<?php
namespace LaraModel\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use LaraModel\Console\Commands\MakeModel;

class LaraModelServiceProvider extends ServiceProvider
{
    public function boot()
    {
//        if ($this->app->runningInConsole()) {
//            $this->commands([
//                MakeModel::class,
//            ]);
//        }


        $configPath = $this->getPackagePath() . 'config' . DIRECTORY_SEPARATOR . 'lara_model.php';
        $this->mergeConfigFrom($configPath, 'lara_model');


        $this->publishes([
            $configPath => config_path('lara_crud.php')
        ]);

    }

    /**
     * @return string
     */
    protected function getPackagePath()
    {
        return  __DIR__ . DIRECTORY_SEPARATOR . '..'. DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR ;
    }

}
