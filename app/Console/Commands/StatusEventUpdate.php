<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class StatusEventUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'statev:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'to Update Status Event Label';

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
        DB::table('events')->whereDate('published_end', '<', now())->update(['status_event' => '2']);
        DB::table('events')->whereDate('event_end', '<', now())->update(['status_event' => '3']);

        $this->info('Successfully Update the Status Event.');
    }
}
