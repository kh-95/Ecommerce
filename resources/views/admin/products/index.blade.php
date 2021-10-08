@extends('admin.home')


@section('content')
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Product</h1>
        </div>
        </div>
                <a href="{{route('products.create')}}"><button class="btn btn-primary" >Add Product</button></a>

<table class="table table-bordered table-hover">
  <thread>
   <tr>
     <tr>
    
    <th scope="col">Name</th>
    <th scope="col">Price</th>
    <th scope="col">Discription</th>
    <th scope="col">Img1</th>
    <th scope="col">Img2</th>
    <th scope="col">Img3</th>
    <th scope="col">category</th>
    <th scope="col">Date</th>
    <th scope="col">control</th>
  </tr>
</thead>
<tbody>
@foreach($products as $product)

<tr>
   
    <td>{{$product->name}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->description}}</td>
    <td>{{$product->image1}}</td>
    <td>{{$product->image2}}</td>
    <td>{{$product->image3}}</td>
    <td >{{$product->category_id}}</td>
    <td>{{$product->created_at}}</td>

    <td><a href="{{url('admin\products\edit',['id'=>$product->id])}}"><button class="btn
     btn-info">Edit</button></a>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$product->id}}">
Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      Are you sure delete <span style="color:red";>{{$product->name}}</span>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <a href="{{url('admin\products\destroy',['id'=>$product->id])}}"><button class="btn btn-danger">Delete</button></a>
    </div>
  </div>
</div>
</div></td>
  </tr>


@endforeach
</tbody>
</table>
@endsection

