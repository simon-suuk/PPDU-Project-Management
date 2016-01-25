@extends('layouts.app')

@section('content')
<div class="container spark-screen">
<div class="row">
<div class="col-md-10 col-md-offset-1">

@include('common.errors')
		
<form class="form-horizontal" action="{{ URL::route('decision.store') }}" method="POST">
{{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend>New Cabinet Decision Upload</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ReferenceNo">Document Reference No</label>  
  <div class="col-md-5">
  <input id="ReferenceNo" name="ReferenceNo" placeholder="" class="form-control input-md" required="" type="text" value="{{ old("name") }}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="DocumentDate">Document Date</label>  
  <div class="col-md-5">
  <input id="DocumentDate" name="DocumentDate" placeholder="" class="form-control input-md" required="" type="text" value="{{ old("name") }}">
    
  </div>
</div>

<!-- Text input>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-5">
  <input id="textinput" name="textinput" placeholder="Meeting Number" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<Select Basic>
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic"></label>
  <div class="col-md-5">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="0">--Meeting Date--</option>
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div-->

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="MeetingID"></label>
  <div class="col-md-5">
    <select id="MeetingID" name="MeetingID" class="form-control">
      <option value="0">--Meeting(?)--</option>
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="DecisionStatusID"></label>
  <div class="col-md-5">
    <select id="DecisionStatusID" name="DecisionStatusID" class="form-control">
      <option value="0">--Decision Status--</option>
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="MinistryID"></label>
  <div class="col-md-5">
    <select id="MinistryID" name="MinistryID" class="form-control">
      <option value="0">--Submitting Ministry--</option>
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic"></label>
  <div class="col-md-5">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="0">--Select Associated Memo--</option>
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Upload</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="submit" class="btn btn-primary">Save</button>
    <a class="btn btn-warning" href="{{ route('decision.index') }}" role="button">Cancel</a>
  </div>
</div>

</fieldset>
</form>

</div>
</div>
@endsection