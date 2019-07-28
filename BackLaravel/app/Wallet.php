<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
   	protected $table = 'wallets';
   	protected $primaryKey = 'id';
   	public $incrementing = true;
   	protected $keyType = "integer";

    public function transfers()
    {
        return $this->hasMany('\App\Transfer','wallet_id','id');
    }
}
