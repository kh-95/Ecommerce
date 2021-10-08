<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
@include('admin.header')
<body>
	@include('admin.nav')
	@include('admin.sidebar')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">{{trans('admin.Dashboard')}}</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">{{trans('admin.Dashboard')}}</h1>
			</div>
		</div><!--/.row-->

@yield('content')

		</div>
	
		
	
	
   
    @include('admin.script')
		
</body>
</html>