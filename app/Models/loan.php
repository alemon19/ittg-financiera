<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
	 protected $fillable = [
	 	'id','client_id','cantidad','nopago','cuota','totalpagar','fechaministracion','fechavencimiento'
	 ];



 public function client()
    {
        return $this->belongsTo(client::class);
    }
    //
}