<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
{
    //jika akun yang login sesuai dengan role
    //maka silahkan akses
    //jika tidak sesuai akan diarahkan ke home

    $roles = array_slice(func_get_args(), 2);

    foreach ($roles as $role) {
        $user = \Auth::user()->role;
        if( $user == $role){
            return $next($request);
        } elseif ($user == 'Banned'){
            $request->session()->flash('alert-danger', 'Akun anda telah di ban.');
            return redirect('/');
        }
    }
    return redirect('membership');
}
}
