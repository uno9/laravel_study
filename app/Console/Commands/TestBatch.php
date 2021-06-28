<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestBatch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'batch:hoge';

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
     * @return int
     */
    public function handle()
    {
      $this->line('Hello World!(line)');
      $this->info('Hello World!(info)');
      $this->comment('Hello World!(comment)');
      $this->warn('Hello World!(warn)');
      $this->error('Hello World!(error)');
    }
}
