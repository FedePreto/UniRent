<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Incluso extends Model
{
    protected $table = 'incluso';
    protected $primaryKey = 'id';
    protected $fillable = [
        'alloggio',
        'servizio_vincolo'
    ];      
}
