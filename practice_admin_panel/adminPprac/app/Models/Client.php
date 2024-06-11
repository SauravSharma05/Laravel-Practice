<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'mobile',
        'mortname',
        'mortnumber',

        'mortaadhar',
        'mortpan',
        'wit1name',
        'wit1aadhar',
        'wit1pan',
        'wit2name',
        'wit2aadhar',
        'wit2pan',
        'borname',
        'qrcode',

        'banker_id',
        'lawyer_id'
    ];

    public function Banker()
    {
        return $this->belongsTo(Banker::class);
    }
    public function Lawyer()
    {
        return $this->belongsTo(Lawyer::class);
    }
}
