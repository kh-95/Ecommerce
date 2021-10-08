@extends('admin.home')

@section('content')

<form class="form-group" action="{{route('users.update',['id'=>$user->id])}}" method="get"  >
	@csrf
	<label>username</label>
	<input type="text" class="form-control" name="name" placeholder="name" value="{{$user->name}}">
	<label>password</label>
	<input type="password" class="form-control" name="password" placeholder="password" >

	
	<label>Email</label>
	<input type="email" class="form-control" name="email" placeholder="email" value="{{$user->email}}" >
	<label>Address</label>
	<input type="text" class="form-control" name="address" placeholder="address" value="{{$user->address}}">

	
	<input type ="submit" class="btn btn-primary" name="submit" value="update">
	



</form>

@endsection 