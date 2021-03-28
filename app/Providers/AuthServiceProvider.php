<?php

namespace App\Providers;

use App\Models\Team;
use App\Policies\TeamPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Task;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isManager',function($user){
            return $user->role == 'manager';
        });
        Gate::define('isAdmin',function($user){
            return $user->role == 'admin';
        });
        Gate::define('isStaff',function($user){
            return $user->role == 'staff';
        });
        Gate::define('update-post', function ($user, $post) {
            return $user->id === $post->user_id;
        });
    }
}
