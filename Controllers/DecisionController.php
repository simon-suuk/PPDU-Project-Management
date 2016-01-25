<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Decision;
use App\Models\Document;
use App\Models\Meeting;

class DecisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = \App\Models\Decision::with('document')->orderBy('DecisionID', 'asc')->get();
	return view('decision.list', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	return view('decision.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), Decision::$rules, Decision::$messages);
	if($validation->passes()) {
		$decision = new Decision();
		$decision->DecisionDate = $request->DecisionDate;
		//$decision->MeetingID = $request->MeetingID;
		//$decision->MeetingNumber = $request->MeetingNumber;
		//$decision->MeetingDate = $request->MeetingNumber;
		//$decision->Content = $request->MeetingNumber;
		//$decision->MinistryID = $request->MeetingNumber;
		//$decision->DecisionStatusID = $request->MeetingNumber;
		//$decision->DocumentID = $request->DocumentID;
		
		$decision>save();
		return redirect('decision');
	}
	
	return redirect('decision/create')
		->withInput()
		->withErrors($validation)
		->with('message', 'Validation Errors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = \App\Models\Decision::with('document')->find($id);
	
	if(is_null($row)) {
		return redirect('decision.index');
	}
	
	//return view('decision.edit')->with(compact('row'));
	return view('decision.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = \App\Models\Decision::find($id);
	$row->delete();
    }
}
