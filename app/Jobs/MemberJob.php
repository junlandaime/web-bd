<?php

namespace App\Jobs;

use App\Models\Member;
use Illuminate\Support\Str;
use App\Imports\EventImport;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class MemberJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $filename;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($filename)
    {
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

            Member::create([
                'name' => $row[0],
                'email' => $row[1],
                'tanggal_lahir' => $row[2],
                'phone_number' => $row[3],
                'address' => $row[4],
                'image' => $row[5],
            ]);

        }

        // File::delete(storage_path('app/public/uploads/' . $this->filename));
        Storage::delete('public/uploads/' . $this->filename);
    }
}
