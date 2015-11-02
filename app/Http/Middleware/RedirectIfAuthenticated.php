<?php

namespace App\Http\Middleware;

use App\Http\Contracts\UserRepositoryInterface;
use Closure;

class RedirectIfAuthenticated
{

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->user->isLoggedIn()) {
            return redirect()->route('admin.dashboard');
        }

        return $next($request);
    }
}
