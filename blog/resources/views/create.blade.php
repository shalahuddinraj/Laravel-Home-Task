@extends('layout.crud')
@section('content')
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Add New Student</h3>
		</div>
		<div class="pannel-body">
			<form class="form-horizontal" action="{{ route('store') }}" method="post">
				{{ csrf_field() }}
		  <fieldset>
		    <div class="form-group">
		      <label for="firstname" class="col-md-2 control-label">First Name :</label>

		      <div class="col-md-8">
		        <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="lastname" class="col-md-2 control-label">Last Name :</label>

		      <div class="col-md-8">
		        <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
		      </div>
		    </div>
		      <div class="form-group">
		      <label for="inputEmail" class="col-md-2 control-label">Email &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>

		      <div class="col-md-8">
		        <input type="email" class="form-control" name="email" placeholder="Email" required>
		      </div>
		    </div>
		    		    <div class="form-group">
		      <label for="phone" class="col-md-2 control-label">Phone No &nbsp:</label>

		      <div class="col-md-8">
		        <input type="phone" class="form-control" name="phone" placeholder="Phone (max 11digits)" maxlength="11" required>
		      </div>
		    </div>
		    <div class="form-group">
		      <div class="col-md-10 col-md-offset-2">
		        <button type="button" class="btn btn-danger">Cancel</button>
		        <button type="submit" class="btn btn-primary">Submit</button>
		      </div>
		    </div>
		  </fieldset>
		</form>
		</div>
	</div>
</div>
@endsection