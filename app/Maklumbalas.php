<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maklumbalas extends Model
{
    //
    public $timestamps = true;

    protected $table = 'maklumbalas';

    protected $primaryKey = 'maklumbalas_id';

    public $incrementing = true;

    // protected $fillable = ['fillable'];

    protected $guarded =['maklumbalas_id'];
}
