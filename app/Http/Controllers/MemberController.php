<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Jobs\MemberJob;
use App\Jobs\ProfileMemberJob;
use App\Models\ArsipEvent;
use App\Models\DataEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class MemberController extends Controller
{
    public function index()
    {
        $member = Member::orderBy('created_at', 'DESC');
        if (request()->q != '') {
            $member = $member->where('name', 'LIKE', '%' . request()->q . '%');
        }

        $member = $member->paginate(10);

        return view('members.index', compact('member'));
    }

    public function create()
    {
        // $category = Category::orderBy('name', 'DESC')->get();

        return view('members.create');
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required|string|max:100',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'address' => 'required',
        //     'image' => 'required',
        // ]);
        
        // dd($request->all());
        

            Member::create([
                'name' => $request->name,
                'email' => $request->email,
                'tanggal_lahir' => $request->tanggal_lahir,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'image' => $request->image,
                'status' => $request->status,
            ]);

            return redirect(route('member.index'))->with(['success' => 'Member Baru Ditambahkan!']);
        }

        public function massUploadForm()
        {
            $arsip = ArsipEvent::orderBy('name', 'DESC')->get();
            return view('members.bulk', compact('arsip'));
        }

        public function massUpload(Request $request)
        {
            $this->validate($request, [
                'file' => 'required|mimes:xlsx'
            ]);

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = time() . '-member.' . $file->getClientOriginalExtension();
                $file->storeAs('public/uploads', $filename);

                MemberJob::dispatch($filename);
                return redirect()->back()->with(['success' => 'Upload Member Dijadwalkan']);
            }
        }

        public function profilmassUploadForm()
        {
            $arsip = ArsipEvent::orderBy('name', 'DESC')->get();
            return view('profilmember.bulk', compact('arsip'));
        }

        public function profilmassUpload(Request $request)
        {
            $this->validate($request, [
                'event_id' => 'required|exists:arsip_events,id',
                'file' => 'required|mimes:xlsx'
            ]);

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = time() . '-profilmember.' . $file->getClientOriginalExtension();
                $file->storeAs('public/uploads', $filename);

                ProfileMemberJob::dispatch($request->event_id, $filename);
                return redirect()->back()->with(['success' => 'Upload Profile Member Dijadwalkan']);
            }
        }

        public function showourevent($id)
        {
            $arsip = ArsipEvent::where('id', $id)->first();

            if (Gate::forUser(auth()->guard('member')->user())->allows('dataevent-view', $arsip)) {
            return view('ecommerce.ourevent', compact('arsip'));
            }

            return redirect(route('member.dashboard'))->with(['error' => 'Silahkan Akses Data yang hanya bisa diakses :)']);
        }
}
