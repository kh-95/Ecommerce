

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">{{Auth::guard('admin')->user()->name}}</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			
			<li ><a href=""><em class="fa fa-dashboard">&nbsp;</em> {{trans('admin.Admin')}}</a></li>
			<li ><a href="{{url('en\admin\users')}}"><em class="fa fa-dashboard">&nbsp;</em> {{trans('admin.User')}}</a></li>
			<li ><a href="{{url('en\admin\categories')}}"><em class="fa fa-dashboard">&nbsp;</em>{{trans('admin.Categories')}} </a></li>
		
			<li ><a href="{{url('en\admin\products')}}"><em class="fa fa-dashboard">&nbsp;</em> {{trans('admin.Product')}}</a></li>
			
				<li ><a href=""><em class="fa fa-dashboard">&nbsp;</em>{{trans('admin.Site_info')}} </a></li>
			<li ><a href=""><em class="fa fa-dashboard">&nbsp;</em>{{trans('admin.BLOG')}} </a></li>
			<li ><a href=""><em class="fa fa-dashboard">&nbsp;</em>{{trans('admin.LOGOUT')}} </a></li>
		</ul>
	</div><!--/.sidebar-->