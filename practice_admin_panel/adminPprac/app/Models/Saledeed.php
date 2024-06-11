<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saledeed extends Model
{
    use HasFactory;

    protected $fillable = [
        'clientname',
        'buyername',
        'mobile',
        'mortnumber',

        'wit1name',
        'wit1aadhar',
        'wit1pan',

        'wit2name',
        'wit2aadhar',
        'wit2pan',

        'lawyer_id'

    ];
    public function Lawyer()
    {
        return $this->belongsTo(Lawyer::class);
    }
}
