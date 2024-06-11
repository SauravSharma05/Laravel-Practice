<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'sno',
        'stampamt',
        'feesamt',
        'totalamt',

        'banker_id',
        'client_id',
        'deed_id'
    ];

    public function client()
    {
        return $this->hasMany(Client::class);
    }
    public function banker()
    {
        return $this->hasMany(Banker::class);
    }
    public function deed()
    {
        return $this->hasMany(Saledeed::class);
    }
}
