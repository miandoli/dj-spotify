<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \App\Party;

class Queue extends Model {
  protected $table ="queues";

  function party() {
    return $this->belongsTo(Party::class);
  }
}
