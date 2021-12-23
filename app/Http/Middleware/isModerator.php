<?php

namespace App\Http\Middleware;

use App\Models\Authority;
use Closure;
use Illuminate\Http\Request;

class isModerator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $yetki= auth()->user()->yetki_id;
        $authorities=Authority::where('id',$yetki)->first();

        if($authorities->name!=='Moderatör')
        {
          return redirect()->route('admin.index');
        }
        return $next($request);
    }
}
