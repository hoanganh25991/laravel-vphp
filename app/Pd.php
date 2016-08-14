<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\PdRecord;
class Pd extends Model
{
    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function pdRecords() {
    	return $this->hasMany(PdRecord::class);
    }
}
