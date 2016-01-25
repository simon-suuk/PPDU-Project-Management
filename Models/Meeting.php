<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    //
    
    public function decision()
    {
    	return $this->belongsTo('\App\Models\Decision', 'DecisionID', 'MeetingID');
    }
}
