


@extends('admin.home')
@section('content')
<!-- <form class="form-group" action="{{route('users.store')}}" method="post" > -->


<!-- @csrf -->
	
	
<!-- <button type="button"  class="btn btn-primary" >{{trans('admin.Add Address')}}</button> -->


<form name="add_address" id="add_address">
@csrf
<label>{{trans('admin.USERNAME')}}</label>
<td><input type ="text" class="form-control" name="name" id="name" placeholder="name">
<label>{{trans('admin.PASSWORD')}}</label>
<input type ="password" class="form-control" name="password" id="password" placeholder="pass">
<label>{{trans('admin.EMAIL')}}</label>
<input type ="email" class="form-control" name="email"  id=" email" placeholder="email">
	
<table class="table table-bordered" id="dynamic_field">
<tr>
<td><input type="text" name="address[]" id="address" class="form-control name_list" placeholder="Enter Address"></td>
<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>


</tr>
</table>

<!-- <input type="button" name="submit" id="submit" value="submit" > -->
<button type ="button" class="btn btn-info" name="submit" id="submit" value="submit">Submit</button>
</form>




   <!-- <label>PHONE</label>
   <input type ="text" class="form-control" name="phone" placeholder="phone">
   -->
   
	
<!-- </form> -->





@endsection

