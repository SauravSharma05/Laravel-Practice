<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banker extends Model
{
    use HasFactory;
    protected $fillable = [
        'bankname',
        'sancletter',
        'legreport',
        'finalloanamt',
        'cusmobile',
        'bankername',
        'bankerno',

        'client_id',
        'lawyer_id'
    ];

    public function client()
    {
        return $this->hasMany(Client::class);
    }
    public function Lawyer()
    {
        return $this->belongsTo(Lawyer::class);
    }
}
