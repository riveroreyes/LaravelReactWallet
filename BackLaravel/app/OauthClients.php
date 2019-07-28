<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OauthClients extends Model
{
    protected $guarded=['secret'];
}
