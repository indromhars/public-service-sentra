<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aspirasi extends Model
{

    use SoftDeletes;
    use HasFactory;

    protected $table = 'aspirasi';

    protected $dates = [
        'deleted_at'
    ];
    protected $fillable = [
        'topic',
        'description',
        'sender_name',
        'location',
        'status', //0 Open, 1 On Progress, 2 Done
        'rate',
        'session_id',
        'attachment',
    ];
}
