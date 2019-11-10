<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Host extends Authenticatable
{
    use Notifiable;

    protected $fillable = ["refresh_token", "access_token", "username"];

    function party() {
      return $this->belongsTo(Party::class);
    }
}
