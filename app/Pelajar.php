<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
class Pelajar extends Authenticable
{
    //
    use Notifiable, HasApiTokens;

    protected $guard = 'pelajar';

    public $timestamps = true;

    protected $table = 'pelajar';

    protected $primaryKey = 'ndp';

    protected $hidden = [
        'password'
    ];
}
