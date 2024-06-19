<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Factory as Auth;
use Illuminate\Support\Facades\DB;

class Authenticate
{
    /**
     * The authentication guard factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($this->auth->guard($guard)->guest()) {
            if($request->has('password')){
                $token = $request->header('Authorization')->exist();
                $check_token = DB::connection('mysql')->table('users')->where('password', $token)->first();

                if ($check_token == null){
                    $res['success'] = false;
                    $res['message'] = 'Permission Not Allowed';

                    return response($res);
                }
                else{
                    $res['success'] = false;
                    $res['message'] = 'Not Authorized';
                    return respose($res);
                }
            }
            //return response('Unauthorized.', 401);
        }

        return $next($request);
    }
}
