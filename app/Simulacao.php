<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simulacao extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tx_juros', 'valor_total', 'valor_parcela', 'tipo_juros', 'qtde_parcelas',
    ];

    
}
