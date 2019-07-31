<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
   protected $table = 'districts';
   public $primaryKey = 'id';
   public $timestramp = true;

   public function province(){
   return $this->belongsTo('App\Province');
   }
}
