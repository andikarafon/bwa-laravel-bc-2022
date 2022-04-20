<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

//Otentikasi itu ada di Role
use App\Models\ManagementAccess\Role;

//untuk middleware pakai fungsi Laravel Gate
use Illuminate\Support\Facades\Gate;

class AuthGates
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
        //middleware jalan berdasarkan user login

        // get all user by session browser
        $user = \Auth::user();

        // checking validation middleware
        // system on or not
        // user active or not 
        //jika tidak ada yang Login maka fungsi di bawah tidak ada yang dijalankan
        if(!app()->runningInConsole() && $user)
        {
            //ambil data yang memiliki permission
            $roles              = Role::with('permission')->get();

            //array untuk menampung data dari $roles
            $permissionsArray   = [];

            // nested loop
            // looping for role ( where table role )
            foreach ($roles as $role){
                // looping for permission ( where table permnission_role )
                foreach ($role->permission as $permissions){

                    //2 dimensions array
                    $permissionsArray[$permissions->title][] = $role->id;
                }
            }

            // check user role
            //permissions array mengumpulkan permission title yang di proses sebelumnya
            foreach ($permissionsArray as $title => $roles) {
                Gate::define($title, function(\App\Models\User $user)
                use ($roles) {
                    return count(array_intersect($user->role->pluck('id')
                    ->toArray(), $roles)) > 0;

                    //--array_intersect adalah mengembalikan semua array yang mengandung fungsi array tersebut

                });
            }

        }

        // return all middleware
        return $next($request);
        
    }
}
