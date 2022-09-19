<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use \App\Models\Event;
use App\Jobs\EventJob;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::with(['category'])->orderBy('created_at', 'DESC');

        if (request()->q != '') {
            $event = $event->where('name', 'LIKE', '%' . request()->q . '%');
        }

        $event = $event->paginate(10);

        return view('events.index', compact('event'));
    }

    public function create()
    {
        $category = Category::orderBy('name', 'DESC')->get();

        return view('events.create', compact('category'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'excerpt' => 'required',
            'link' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|integer',
            'meet' => 'required|integer',
            'image' => 'required|image|mimes:png,jpeg,jpg',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $filename = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();

            $file->storeAs('public/events', $filename);

            $event = Event::create([
                'name' => $request->name,
                'slug' => $request->name,
                'category_id' => $request->category_id,
                'excerpt' => $request->excerpt,
                'link' => $request->link,
                'description' => $request->description,
                'image' => $filename,
                'price' => $request->price,
                'meet' => $request->meet,
                'status' => $request->status,
                'status_event' => $request->status_event,
                'event_start' => $request->event_start,
                'event_end' => $request->event_end,
                'published_at'    => $request->published_at,
                'published_end'    => $request->published_end


            ]);

            return redirect(route('event.index'))->with(['success' => 'Event Baru Ditambahkan!']);
        }
    }

    public function destroy($id)
    {
        $event = Event::find($id);

        Storage::delete('public/events/' . $event->image);

        $event->delete();

        return redirect(route('event.index'))->with(['success' => 'Event Sudah Dihapus']);
    }

    public function edit($id)
    {
        $event = Event::find($id);
        $category = Category::orderBy('name', 'DESC')->get();
        return view('events.edit', compact('event', 'category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'excerpt' => 'required',
            'link' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|integer',
            'meet' => 'required|integer',
            'image' => 'nullable|image|mimes:png,jpeg,jpg',
        ]);

        $event = Event::find($id);
        $filename = $event->image;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            //MAKA UPLOAD FILE TERSEBUT
            $file->storeAs('public/events', $filename);
            //DAN HAPUS FILE GAMBAR YANG LAMA
            Storage::delete('public/events/' . $event->image);
        }

        $event->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'excerpt' => $request->excerpt,
            'link' => $request->link,
            'description' => $request->description,
            'image' => $filename,
            'price' => $request->price,
            'meet' => $request->meet,
            'status' => $request->status,
            'status_event' => $request->status_event,
            'event_start' => $request->event_start,
            'event_end' => $request->event_end,
            'published_at'    => $request->published_at,
            // 'published_at'    => date('Y-m-d_H-i-s'),
            'published_end'    => $request->published_end
        ]);
        return redirect(route('event.index'))->with(['success' => 'Data Kegiatan Diperbaharui']);
    }

    public function massUploadForm()
    {
        $category = Category::orderBy('name', 'DESC')->get();
        return view('events.bulk', compact('category'));
    }

    public function massUpload(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required|exists:categories,id',
            'file' => 'required|mimes:xlsx'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '-event.' . $file->getClientOriginalExtension();
            $file->storeAs('public/uploads', $filename);

            EventJob::dispatch($request->category_id, $filename);
            return redirect()->back()->with(['success' => 'Upload Event Dijadwalkan']);
        }
    }
}
