<?php

namespace App\Jobs;

use App\Models\DataEvent;
use App\Imports\EventImport;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class DataArsipEventJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    protected $event;
    protected $filename;
    
    public function __construct($event, $filename)
    {
        $this->event = $event;
        $this->filename = $filename;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $files = (new EventImport)->toArray(storage_path('app/public/uploads/' . $this->filename));
        
        foreach ($files[0] as $row) {
            
            DataEvent::create([
                'event_id' => $this->event,
                'code' => $row[0],
                'name' => $row[1],
                'slug' => $row[1],
                'meet_ke' => $row[2],
                'link' => $row[3],
                'meet_time' => $row[6],
            ]);

        }

        // File::delete(storage_path('app/public/uploads/' . $this->filename));
        Storage::delete('public/uploads/' . $this->filename);
    }
}
