@extends('layout.crud')

@section('content')
<div class="container">
    @if (session('successMsg'))
    <div class="alert alert-success">
  <strong>Success!</strong> {{ session('successMsg')}}
  @endif
</div>

<table class="table table-border table-striped table-hover ">
  <thead>
  <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name </th>
    <th>Email</th>
    <th>Phone</th>
  </tr>
  </thead>
  <tbody>
  
@foreach($students as $student)
<tr>
<td>{{ $student->id }}</td>
<td>{{ $student->first_name }}</td>
<td>{{ $student->Last_name }}</td>
<td>{{ $student->email }}</td>
<td>{{ $student->phone }}</td>
</tr>
@endforeach

  </tbody>
</table>
</div>
@endsection