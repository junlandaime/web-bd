<?php

namespace App\Mail;

use App\Models\Member;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MemberRegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $member;
    protected $randomPassword;

    public function __construct(Member $member, $randomPassword)
    {
        $this->member = $member;
        $this->randomPassword = $randomPassword;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Verifikasi Kealumnian Anda')
        -> view('emails.register')
        ->with([
            'member' => $this->member,
            'password' => $this->randomPassword
        ]);
    }
}
