@extends('base')
@section('content')
<div class="col-md bg-primary">
<table>
        <tr><td width="30%">
@foreach ($users as $user)
<h5 align="left"> {{ $user->name}}</h5></td>
@endforeach
<td width="80%"></td>
 <td width="20%" align="right"><a href="{{url('/login')}}" class="btn btn-danger" >Logout</a></td>
 </tr>
</table>
</div>
</div>
<div class="row" align="center">
<div class="col-3"></div>
<div class="col-6">
<table class="table table-stripped table-bordered">
		@foreach ($users as $user)	
		<tr><th>ID</th><td>{{ $user->id}}</td></tr>
		<tr><th>Name</th><td>{{ $user->name}}</td></tr>
		<tr><th>Email</th><td>{{ $user->email}}</td></tr>
        <tr><th>Mobile</th><td>{{ $user->mobile}}</td></tr>
        <tr><th>Address</th><td>{{ $user->address}}</td></tr>
        <tr><th>City</th><td>{{ $user->city}}</td></tr>
        <tr><th>State</th><td>{{ $user->state}}</td></tr>
        <tr><th>Country</th><td>{{ $user->country}}</td></tr>
        <tr><th>Zip</th><td>{{ $user->zip}}</td></tr>
	@endforeach	
</table>
</div>
</div>
@endsection