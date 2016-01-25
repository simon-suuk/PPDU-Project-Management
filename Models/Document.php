<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable= ['ReferenceNo'];
    
    public function decision()
    {
    	return $this->belongsTo('\App\Models\Decision', 'DecisionID', 'DocumentID');
    }
    
}
