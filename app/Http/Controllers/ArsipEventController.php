<?php

namespace App\Http\Controllers;

use App\Models\ArsipEvent;
use App\Jobs\ArsipEventJob;
use Illuminate\Http\Request;
use App\Jobs\DataArsipEventJob;

class ArsipEventController extends Controller
{

    public function massUploadForm()
        {
            $arsip = ArsipEvent::orderBy('name', 'DESC')->get();
            return view('arsipevent.bulk', compact('arsip'));
        }

        public function massUpload(Request $request)
        {
            $this->validate($request, [
                'file' => 'required|mimes:xlsx'
            ]);

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = time() . '-arsip.' . $file->getClientOriginalExtension();
                $file->storeAs('public/uploads', $filename);

                ArsipEventJob::dispatch($filename);
                return redirect()->back()->with(['success' => 'Upload Arsip Event Dijadwalkan']);
            }
        }

        public function datamassUploadForm()
        {
            $arsip = ArsipEvent::orderBy('name', 'DESC')->get();
            return view('arsipevent.bulk2', compact('arsip'));
        }

        public function datamassUpload(Request $request)
        {
            $this->validate($request, [
                'event_id' => 'required|exists:arsip_events,id',
                'file' => 'required|mimes:xlsx'
            ]);

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = time() . '-dataarsipevent.' . $file->getClientOriginalExtension();
                $file->storeAs('public/uploads', $filename);

                DataArsipEventJob::dispatch($request->event_id, $filename);
                return redirect()->back()->with(['success' => 'Upload Data Arsip Event Dijadwalkan']);
            }
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArsipEvent  $arsipEvent
     * @return \Illuminate\Http\Response
     */
    public function show(ArsipEvent $arsipEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArsipEvent  $arsipEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(ArsipEvent $arsipEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArsipEvent  $arsipEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArsipEvent $arsipEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArsipEvent  $arsipEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArsipEvent $arsipEvent)
    {
        //
    }
}
