

<!-- dd('khadija'); -->
@extends('admin.home')

@section('content')

		<form action="{{route('products.update',['id'=>$product->id])}}" method="get">
					          @csrf
							  @include('admin.products.form')
				            </form>
						
@endsection

