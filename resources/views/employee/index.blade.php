@extends('layouts.app')
@section('content')
<divclass="containermt-4">
<div class="rowmb-0">
<divclass="col-lg-9col-xl-10">
<h4class="mb-3">{{$pageTitle }}</h4>
</div>
<divclass="col-lg-3col-xl-2">
<divclass="d-grid gap-2">
<a href="{{route('employees.create') }}" class="btn
btn-primary">CreateEmployee</a>
</div>
</div>
</div>
<hr>
<div class="table-responsive borderp-3rounded-3">
<table class="tabletable-bordered table-hovertable-striped
mb-0bg-white">
<thead>
<tr>
<th>FirstName</th>
<th>LastName</th>
<th>Email</th>
<th>Age</th>
<th>Position</th>
<th></th>
</tr>
</thead>
<tbody>
@foreach ($employees as$employee)
<tr>
<td>{{ $employee->firstname }}</td>
<td>{{ $employee->lastname }}</td>
<td>{{ $employee->email}}</td>
<td>{{ $employee->age}}</td>
<td>{{ $employee->position->name }}</td>
<td>@include('employee.actions')</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
