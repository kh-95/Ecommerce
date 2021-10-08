

@extends('admin.home')
@section('content')

<div class="form-group">
<form name="add_address" id="add_address">
@csrf
<table class="table table-bordered" id="dynamic_field">
<tr>
<td><input type="text" name="address[]" id="address" class="form-control name-list" placeholder="Enter Address"></td>
<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>


</tr>
</table>

<input type="button" name="submit" id="submit" value="submit" >

</form>

</div>
@endsection