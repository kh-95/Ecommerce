@extends('admin.home')


@section('content')



		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">{{trans('admin.User')}}</h1>
</div>
</div><!--/.row-->

<a href="{{route('users.create')}}"><button class="btn btn_primary">{{trans('admin.Add User')}}</button></a>

<table class="table table-borderd table-hover">
	<thead>
    <tr>
      
      <th scope="col">{{trans('admin.Username')}}</th>
      <th scope="col">{{trans('admin.Password')}}</th>
      <th scope="col">{{trans('admin.Email')}}</th>
      <th scope="col">{{trans('admin.phone')}}</th>
      <th scope="col">{{trans('admin.Address')}}</th>
    
      <th scope="col">{{trans('admin.Date')}}</th>
       
      <th scope="col">{{trans('admin.Control')}}</th>
    </tr>
  </thead>
  <tbody>
  	
@foreach($users as $user)
<tr>
<td> {{$user->name}}</td>
<td>{{$user->password}} </td>
<td>{{$user->email}} </td>
<td>{{$user->phone}}</td>
<td>{{$user->address[0]}}</td>
<td>{{$user->created_at}} </td>

<td><a href="{{url('admin\users\edit',['id'=>$user->id])}}"><button class="btn btn-info">{{trans('admin.Edit')}}</button></a>

<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal{{$user->id}}">
{{trans('admin.Delete')}}</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure delete <span style="color:red";> {{$user->name}}</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <a href="{{url('admin\users\destroy',['id'=>$user->id])}}"> <button type="button" class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>

</td>
</tr>
@endforeach
</tbody>





</table>

@endsection











