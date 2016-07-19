<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class confirm {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(Auth::user())
		{
			if(Auth::user()->active==0)
			{
				session()->put('confirm','you should confirm register from your email');
				if(Auth::user()->sendMail==0)
				{
					return redirect('sendMail');
				}
				return redirect('auth/logout');
			}
			
			
		}
		return $next($request);
	}

}
