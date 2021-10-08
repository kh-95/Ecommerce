
@extends('admin.home')



@section('content')


{!! Form::open(['route' => 'products.store', 'method' => 'post','files'=>true]) !!}
@csrf
@include('admin.products.form')

{!!Form::close()!!}


@endsection



