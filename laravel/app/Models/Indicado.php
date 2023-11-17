<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeIndicado',
        'numeroIndicado',
        'userfranet_numero',
        'parentesco',
        'situacao',
        'vencimento',
        'cadastradoEm'
    ];

    public function userfranet()
    {
        return $this->belongsTo(Userfranet::class);
    }
}
