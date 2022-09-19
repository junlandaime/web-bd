<?php

namespace App\Jobs;

use App\Models\Event;
use Illuminate\Support\Str;
use App\Imports\EventImport;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\File;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class EventJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $category;
    protected $filename;
    
    public function __construct($category, $filename)
    {
        $this->category = $category;
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
            $explodeURL = explode('/', $row[4]);
            $explodeExtension = explode('.', end($explodeURL));
            $filename = time() . Str::random(6) . '.' . end($explodeExtension);

            file_put_contents(storage_path('app/public/events') . '/' . $filename, file_get_contents($row[4]));

            Event::create([
                'name' => $row[0],
                'slug' => $row[0],
                'category_id' => $this->category,
                'excerpt' => $row[1],
                'link' => $row[2],
                'description' => $row[3],
                'price' => $row[5],
                'meet' => $row[6],
                'image' => $filename,
                'status' => true,
                'status_event' => $row[7],
                'event_start' => $row[8],
                'event_end' => $row[9],
                'published_at' => $row[10],
                'published_end' => $row[11]

            ]);

        }

        // File::delete(storage_path('app/public/uploads/' . $this->filename));
        Storage::delete('public/uploads/' . $this->filename);
    }
}
