<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use SoftDeletes, Traits\Uuid;

    protected $fillable = ['name', 'is_active'];
    protected $date = ['deleted_at'];
    protected $casts = ['id' => 'string'];
    public $incrementing = false;
}
