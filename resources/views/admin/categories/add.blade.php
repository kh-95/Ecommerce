@extends('admin.home')

@section('content')
<form class="form-group" action="{{route('categories.store')}}" method="post"  >
	@csrf

<label>Name</label>
	<input type="text" class="form-control" name="name" placeholder="name">
	 
	<input type ="submit" class="btn btn-info" name="submit" value="add">



</form>
@endsection 