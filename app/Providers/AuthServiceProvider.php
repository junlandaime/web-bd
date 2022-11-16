<?php

namespace App\Providers;

use App\Models\ArsipEvent;
use App\Models\Member;
use App\Models\DataEvent;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Symfony\Component\HttpKernel\Profiler\Profile;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();



        Gate::define('dataevent-view', function (Member $member, ArsipEvent $arsip) {
        
            //kemudian dicek, jika customer id sama dengan customer_id yang ada pada table order
            //maka returnnya true
            //gate ini hanya akan mereturn true/false sebagai tanda diizinkan atau tidak
            foreach ($member->profil as $item) {
                if ($item->event_id == $arsip->id) {
                    return true;
                }
                
            };
            
        });
    }
}
