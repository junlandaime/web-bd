<?php

namespace App\Jobs;

use App\Models\Member;
use App\Imports\EventImport;
use App\Models\ProfileMember;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ProfileMemberJob implements ShouldQueue
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
            
            if (!Member::where('email', '=', $row[1])->exists()) {
                Member::create([
                    'name' => $row[0],
                    'email' => $row[1],
                ]);
            }


            ProfileMember::create([
                'event_id' => $this->event,
                'name' => $row[0],
                'email' => $row[1],
                'tanggal_lahir' => $row[2],
                'gender' => $row[4],
                'wa_number' => $row[5],
                'domisili' => $row[6],
                'tinggal' => $row[7],
                'marriage_status' => $row[8],
                'education' => $row[9],
                'suku' => $row[10],
                'kondisi' => $row[11],
                'foto' => $row[12],
                'univ' => $row[13],
                'jurusan' => $row[14],
                'pekerjaan' => $row[15],
                'dll' => $row[17],
                'input_data' => $row[20],
            ]);

        }

        // File::delete(storage_path('app/public/uploads/' . $this->filename));
        Storage::delete('public/uploads/' . $this->filename);
    }
}
