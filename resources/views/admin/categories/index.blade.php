@extends('admin.home')

@section('content')

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">{{trans('admin.Categories')}}</h1>

<a href="{{route('categories.create')}}"><button class="btn btn-primary">{{trans('admin.Add category')}}</button></a>





<table class="table table-bordered table-hover" id="categorytable">
  <thead>
    <tr>
      
    <th scope="col">#</th>
      <th scope="col">{{trans('admin.Name')}}</th>
      <th scope="col">{{trans('admin.Control')}}</th>
    </tr>
  </thead>

  <tbody>
@foreach($categories as $category)
    <tr>
  <td>{{$category->id}}</td>
      <td>{{$category->name}}</td>
      
  <td><button  type="button" name="edit" class="btn btn-info editbtn">{{trans('admin.Edit')}}</button>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-danger delete" id="{{$category->id}}" >
{{trans('admin.Delete')}}</button>

<!-- Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure delete 
        <!-- <span style="color:red";>{{$category->name}}</span> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <a href="{{route('categories.destroy',['id'=>$category->id])}}"> -->
        <button name="close_button" id="close_button" class="btn btn-danger">Delete</button>
        <!-- </a> -->
      </div>
    </div>
  </div>
</div>
<!-- //edit by ajax -->

<div class="modal fade" id="categoryeditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit data of Categories by using ajax</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id ="editformId">
      <div class="modal-body">
      @csrf
      {{method_field('PUT')}}
      <input type="hidden" name="id" id="catid" >
      <div class="form-group">
	<label>Name</label>

	<input type="text" class="form-control" name="name" id="catname"  >

      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary"> Category data updated</button>
      </div>
      </form>
    </div>
  </div>
</div>


</td>
    </tr>

@endforeach

    
  </tbody>
</table>
@endsection 