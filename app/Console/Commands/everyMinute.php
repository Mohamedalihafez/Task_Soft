<?php

namespace App\Console\Commands;

use App\Models\Advertisement;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class everyMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $advertisments = Advertisement::whereDate('created_at', Carbon::yesterday())->get();
        foreach( $advertisments as $advertisment)
        {
            $advertisment->delete();

        }
        echo "operation done";
    }
}
