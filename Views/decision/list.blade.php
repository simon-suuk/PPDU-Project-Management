@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
        <h1>All Cabinet Decisions</h1>

		<p><a class="btn btn-info" href="{{ route('decision.create') }}" role="button">Add New Cabinet Decision</a></p>  

            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                
                  <table class="table table-striped">
					<tr>
						<th>DecisionID</th><th>DecisionDate</th><th>MeetingID</th><!--th>MeetingNumber</th><th>MeetingDate</th--><th>Content</th><th>MinistryID</th><th>DecisionStatusID</th><th>DocumentID</th><th></th><th></th><th></th>
					</tr>
					@foreach($rows as $row)
					<tr>
						<td>{{$row->DecisionID or 'DEFAULT'}}</td>
						<td>{{$row->DecisionDate or 'DEFAULT'}}</td>
						<td>{{$row->MeetingID or 'DEFAULT'}}</td>
						<!--td>{{$row->MeetingNumber or 'DEFAULT'}}</td>
						<td>{{$row->MeetingDate or 'DEFAULT'}}</td-->
						<td>{{$row->Content or 'DEFAULT'}}</td>
						<td>{{$row->MinistryID or 'DEFAULT'}}</td>
						<td>{{$row->DecisionStatusID or 'DEFAULT'}}</td>
						<td>{{$row->document->DocumentID or 'DEFAULT'}}</td>
						<td><a class="btn btn-success" href="{{ route('decision.show', $row-> Decision_ID ) }}" role="button">View</a></td>
						<td><a class="btn btn-primary" href="{{ route('decision.edit', $row-> Decision_ID ) }}" role="button">Edit</a></td>
						<td>
							<form action="{{ route('decision.destroy', $row-> Decision_ID ) }}" method="POST">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}

								<button type="submit" class="btn btn-danger">
									<i class="fa fa-trash"></i>Delete
								 </button>
							 </form>
						</td>
					</tr>
					@endforeach
					
				  </table>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
