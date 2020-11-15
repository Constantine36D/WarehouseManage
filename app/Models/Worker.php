<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $table = "worker";
    public $timestamps = true;
    protected $guarded = [];
    protected $primaryKey = 'id';
}
