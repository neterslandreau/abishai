<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;
    use Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
    * Indicates if the ID's are auto-incrementing
    *
    * @var bool
    */
    public $incrementing = false;

    /**
     * retrieve user data
     *
     * @param  string $identifier unique description of user identity
     * @return array User objects
     */
    public static function getUser($identifier = null)
    {
        $results = [];
        if (preg_match('/\//', $email)) {
            $email = strtoupper($email);
            $results = DB::connection('oracle')->select("select * from user_od where signin like '%$identifier'");
        } else {
            $results = DB::connection('oracle')->select("select * from user_od where email='$identifier'");
        }
        return $results;
    }

    /**
     * Update user data
     *
     * @param  string $id Primary key
     * @param  string $field Field name
     * @param  string $value Value to be stored
     * @param  string $table Table name
     * @return array  User objects
     */
    public static function updateUser($id, $field, $value, $table = 'user_od')
    {
        $results = DB::connection('oracle')->update("update $table set $field='$value' where userid='$id'");
        return $results;
    }
}
