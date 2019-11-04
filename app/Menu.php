<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    public $timestamps = true;

    protected $table = 'menu';

    protected $primaryKey = 'menu_id';

    public $incrementing = true;

    // protected $fillable = ['fillable'];
    protected $guarded = ['menu_id'];
}
