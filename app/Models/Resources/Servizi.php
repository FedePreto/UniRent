<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Servizi extends Model
{
    protected $table = 'servizi_vincoli';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
