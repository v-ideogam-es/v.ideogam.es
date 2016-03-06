<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Scaffold extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:scaffold {resource}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scaffold a new resource.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $resource   = $this->argument('resource');
        $singular   = str_singular($resource);
        $controller = ucfirst($singular) . 'Controller';
        $model      = ucfirst($singular);

        $this->call('make:controller', ['--resource' => true, 'name' => $controller]);
        $this->call('make:model', ['--migration' => true, 'name' => $model]);

        if (!is_dir(base_path('/resources/views/') . $resource)) {
            mkdir(base_path('/resources/views/') . $resource);
        }

        touch(base_path('/resources/views/') . $resource . '/index.blade.php');
    }
}
