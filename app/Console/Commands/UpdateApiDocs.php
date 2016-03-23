<?php

namespace App\Console\Commands;

use Crada\Apidoc\Builder;
use Crada\Apidoc\Exception;
use Illuminate\Console\Command;

class UpdateApiDocs extends Command
{

    protected $classes = [
        \App\Http\Controllers\Api\V1\AuthController::class,
        \App\Http\Controllers\Api\V1\UsersController::class,
        \App\Http\Controllers\Api\V1\TasksController::class,
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docs:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $output_dir = resource_path() . '/views/docs';
        $template_file = resource_path() . '/templates/apidoc.html';
        $output_file = 'api.blade.php';

        try {
            $builder = new Builder($this->classes, $output_dir, 'Sample API', $output_file, $template_file);
            $builder->generate();
        } catch (Exception $e) {
            echo 'There was an error generating the documentation: ', $e->getMessage();
        }
    }
}
