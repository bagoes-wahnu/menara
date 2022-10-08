<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tower extends Model
{
    use HasFactory;

    protected $primaryKey = 'gid';

    protected $guarded = [];

    public $timestamps = false;

    // public $incrementing = false;

    protected $table = 'tower_surabaya';
}
