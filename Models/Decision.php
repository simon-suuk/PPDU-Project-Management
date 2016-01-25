<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Decision extends Model
{
    protected $table = 'decisions';
    protected $fillable = ['DecisionDate', 'MeetingID', 'Content', 'MinistryID', 'DecisionStatusID', 'DocumentID'];
    public $timestamps = false;
    
    public static $rules = [
	'DecisionDate' => 'required|date',
	//'MeetingID' => 'required|integer|max:11',
	//'MeetingNumber' => 'required|string|max:50',
	//'MeetingDate' => 'required|date',
	//'Content' => 'string|max:2000',
	//'MinistryID' => 'required|integer|max:11',
	//'DecisionStatusID' => 'required|integer|max:11',
	//'DocumentID' => 'required|integer|max:11'
    ];
    
    public static $messages = [
	'DecisionDate.required' => 'Task name field cannot be empty',
	'DecisionDate.date' => 'Task name must be alphabet characters'
	
	//'MeetingID.required' => 'Task performer id field cannot be empty',
	//'MeetingID.integer' => 'Task performer id must be an integer',
	//'MeetingID.max' => 'Task performer id cannot be more than 11 digits',
	
	/*'MeetingNumber.required' => 'Task performer id field cannot be empty',
	'MeetingNumber.string' => 'Task performer id must be an integer',
	'MeetingNumber.max' => 'Task performer id cannot be more than 11 digits',
	
	'MeetingDate.required' => 'Task name field cannot be empty',
	'MeetingDate.date' => 'Task name must be alphabet characters',*/
	
	/*'Content.required' => 'Task performer id field cannot be empty',
	'Content.string' => 'Task performer id must be an integer',
	'Content.max' => 'Task performer id cannot be more than 11 digits',
	
	'MinistryID.required' => 'Task performer id field cannot be empty',
	'MinistryID.integer' => 'Task performer id must be an integer',
	'MinistryID.max' => 'Task performer id cannot be more than 11 digits',
	
	'DecisionStatusID.required' => 'Task performer id field cannot be empty',
	'DecisionStatusID.integer' => 'Task performer id must be an integer',
	'DecisionStatusID.max' => 'Task performer id cannot be more than 11 digits',
	
	
	'DocumentID.required' => 'Task performer id field cannot be empty',
	'DocumentID.integer' => 'Task performer id must be an integer',
	'DocumentID.max' => 'Task performer id cannot be more than 11 digits'*/
    ];
    
    public function document(){
	return $this->hasOne('\App\Models\Document', 'DocumentID', 'DecisionID');
    }
    
    public function meeting(){
	return $this->hasOne('\App\Models\Meeting', 'MeetingID', 'DecisionID');
    }
}
