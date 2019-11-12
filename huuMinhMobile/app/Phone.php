<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';
    protected $fillable = ['name','color','ram','internal_memory','sim','screen_size','price','image'];
}
