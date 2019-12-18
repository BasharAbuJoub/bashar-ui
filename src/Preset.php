<?php

namespace BasharUI;

use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;

class Preset extends LaravelPreset{

    public static function install(){
        static::updatePackages();
        static::updateMix();
        static::updateJsDirectory();
        static::updateSassDirectory();
        static::updateWebRoutesFile();
        static::addLayoutTemplate();
    }

    public static function updateSassDirectory(){
        File::cleanDirectory(resource_path('sass'));
        File::copy(__DIR__ . '/stubs/app.scss', resource_path('sass/app.scss'));
    }

    public static function updateJsDirectory(){
        File::cleanDirectory(resource_path('js/components'));
        File::copy(__DIR__ . '/stubs/app.js', resource_path('js/app.js'));
        File::copy(__DIR__ . '/stubs/bootstrap.js', resource_path('js/bootstrap.js'));
    }

    public static function updateMix(){
        copy(__DIR__ . '/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }


    public static function updatePackageArray($packages){
        return array_merge([
            'simple-vue-modal' => '^1.0.1',
            'laravel-mix-tailwind' => '^0.1.0',
            'vue' => '^2.5.17'
        ], Arr::except($packages, [
            'popper.js',
            'lodash',
            'jquery'
        ]));
    }
    public static function addLayoutTemplate(){
        File::cleanDirectory(resource_path('views'));
        File::makeDirectory(resource_path('views/layouts'));
        File::copy(__DIR__ . '/stubs/app.blade.php', resource_path('views/layouts/app.blade.php'));
    }

    public static function updateWebRoutesFile(){
        File::copy(__DIR__ . '/stubs/web.php', base_path('routes/web.php'));
    }

}
