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

    public static function getUser($email = null)
    {
        $results = [];
        $results = DB::connection('oracle')->select("select * from user_od where email='$email'");
        return $results;
    }

    public static function updateUser($id, $field, $value, $table = 'user_od')
    {
        $results = DB::connection('oracle')->update("update $table set $field='$value' where userid='$id'");
        return $results;
    }
}
