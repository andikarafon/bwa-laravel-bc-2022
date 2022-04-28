<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;


use App\Models\ManagementAccess\DetailUser;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]), function (User $user) {
                $this->createTeam($user);

                  //add to detail_user, di saat user dibuat maka detail user juga dibuat
                  $detail_user = new DetailUser;
                  $detail_user->user_id         = $user->id; //langsung mengiisi dari id_user
                  $detail_user->type_user_id    = 3; //user baru terisi menjadi pasien
                  $detail_user->contact         = NULL;
                  $detail_user->address         = NULL;
                  $detail_user->photo           = NULL;
                  $detail_user->gender          = NULL;
                  $detail_user->save();

            });
        });


       

    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}
