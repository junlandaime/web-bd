<?php

namespace App\Http\Controllers\Ecommerce;

use App\Models\Event;
use App\Models\Member;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\MemberRegisterMail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Queue\Jobs\RedisJob;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class FrontController extends Controller
{
    public function index()
    {
        $events = Event::with(['category'])->orderBy('created_at', 'DESC')->paginate(3);

        return view('ecommerce.index', compact('events'));
    }

    public function event()
    {
        $events = Event::orderBy('created_at', 'DESC')->paginate(12);

        return view('ecommerce.event', compact('events'));
    }

    public function categoryEvent($slug)
    {
        $events = Category::where('slug', $slug)->first()->event()->orderBy('created_at', 'DESC')->paginate(12);

        return view('ecommerce.event', compact('events'));
    }

    public function show($slug)
    {
        $event = Event::with(['category'])->where('slug', $slug)->first();
        // $Events = Event::orderBy('created_at', 'DESC')->paginate(12);

        return view('ecommerce.show', compact('event'));
    }

    public function api()

    {
        $channelId = 'UCOivuK5MQ3QMiI7WeSJWE6w';
        $response = Http::get('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=' . $channelId . '&key=AIzaSyC0hRAiVm3EpY58o7P0N5_Dx7I47VNZ0nY');



        $result = $response->json();
        $youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
        $channelName = $result['items'][0]['snippet']['title'];
        $subscriber = $result['items'][0]['statistics']['subscriberCount'];

        // latest video
        $urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyC0hRAiVm3EpY58o7P0N5_Dx7I47VNZ0nY&channelId=' . $channelId . '&maxResults=3&order=date&part=snippet';
        $result = Http::get($urlLatestVideo)->json();
        $latestVideoId = $result['items'][0]['id']['videoId'];
        $trilatestVideoId = $result['items'];

        $id = '';
        $username = Http::get('https://graph.instagram.com/v14.0/17841401381766698?fields=id,username&access_token='. $id)->json()['username'];

        $result = Http::get('https://api.instagram.com/v1/users/self?access_token='. $id)->json();
        $result = Http::get('https://api.instagram.com/v1/users/self/media/recent/?access_token=&. $idcount=8')->json();

        $resultPhotos = Http::get('https://graph.instagram.com/me/media?fields=id,caption&access_token='. $id)->json();
        $photos = [];
        foreach ($resultPhotos['data'] as $photo) {
            $photos[] = $photo['id'];
        }
        $photos = array_slice($photos, 0, 12);

        $dataPhotoss = [];
        foreach ($photos as $photo) {
            $resultDataPhotos = Http::get("https://graph.instagram.com/$photo?fields=id,media_type,media_url,username,timestamp&access_token=IGQVJXSVVlSjVaeUt4cnFBMTY5Wi1hNTlpTVAxN2dhZAGllSDMxX2JLZA0lsN2V0YjhRTDFOdWRDX054VXVGS2todWdMemt3SlVMV0ZA1eEhIWHptd25CZAXNvSlRKSUpLOXZAnaU9wekJn")->json();
            $dataPhoto = [];
            foreach ($resultDataPhotos as $photoss) {
                $dataPhoto[] = $photoss;
            }
            $dataPhotoss[] = $dataPhoto;
        }


        return view('ecommerce.content', compact('result', 'youtubeProfilePic', 'channelName', 'subscriber', 'latestVideoId', 'username', 'dataPhotoss', 'trilatestVideoId'));
        // return view('welcome', compact('result', 'youtubeProfilePic', 'channelName', 'subscriber', 'latestVideoId', 'username', 'dataPhotos'));
    }

    public function member()
    {
        return view('ecommerce.member');
    }

    public function memberCheck(Request $request)
    {
        // dd($request->email);
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        DB::beginTransaction();
        try {
            $member = Member::where('email', $request->email)->first();

            // if (!auth()->check() && $member) {
            if (!$member) {
                return redirect(route('member.register'))->with(['error' => 'Email anda berlum terdaftar, silahkan daftar terlebih dahulu']);
            }
                // dd($member);
            $password = Str::random(8);
            $member->update([
                'password' => $password,
                'activate_token' => Str::random(30)
            ]);

            DB::commit();
            Mail::to($request->email)->send(new MemberRegisterMail($member, $password));

            return redirect(route('member.login'))->with(['success' => 'Email anda terdaftar, silahkan silahkan cek email untuk verifikasi']);

        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function verifyMemberRegistration($token)
    {
        $member = Member::where('activate_token', $token)->first();

        if ($member) {
            $member->update([
                'activate_token' => null,
                'status' => 1
            ]);

            return Redirect(route('member.login'))->with(['success' => 'Verifikasi Berhasil, Silahkan Login']);
        }

        return redirect(route('member.login'))->with(['error'=>'Invalid Verifikasi Token']);
    }
}
