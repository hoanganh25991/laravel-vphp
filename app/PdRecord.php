<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pd;
class PdRecord extends Model
{
    public function Pd() {
    	return $this->belongsTo(Pd::class);
    }
}
