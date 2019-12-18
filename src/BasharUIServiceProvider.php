<?php

namespace BasharUI;

use Illuminate\Foundation\Console\PresetCommand;
use Illuminate\Support\ServiceProvider;

class BasharUIServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('bashar-ui', function($command){
            Preset::install();
            $command->line('');
            $command->info('Successfully installed BasharUI Preset.');
            $command->line('');
            $command->info('Plaase run the following commands: ');
            $command->line('1. npm install');
            $command->line('2. npx tailwind init tailwind.js --full');
        });
    }
}
