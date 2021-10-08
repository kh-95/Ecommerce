@extends('admin.home')

@section('content')


<form class="form-group" action="{{route('categories.update',['id'=>$category->id])}}" method="get" >
@csrf
	<label>Name</label>
	<input type="text" class="form-control" name="name" value="{{$category->name}}">
	
	<input type ="submit" class="btn btn-info" name="submit" value="update">
	



</form>
@endsection