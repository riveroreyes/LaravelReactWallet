<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $table = "transfers";
    protected $primaryKey  = "id";
    public $incrementing = true;
    protected $keyType = "integer";


    public function wallet(){
        return $this->belongsTo('\App\Wallet','wallessts','id=wallet_id');
    }
}
