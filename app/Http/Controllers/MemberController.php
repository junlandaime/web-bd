<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

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
}
