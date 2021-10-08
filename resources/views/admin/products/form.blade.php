<div class="panel-body">
                                    <div class="form-group">
                                        <label>Name: </label>
                                
										{!!Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
											<label>Price: </label>
											{!!Form::number('price',null,['class'=>'form-control'])!!}
										</div>

                                        <div class="form-group">
											<label>Description: </label>
											{!!Form::text('description',null,['class'=>'form-control']) !!}
										</div>

										
										




<div class="form-group">
											<label>Category: </label>
									{!! Form::select('category_id', categories(), null, ['placeholder' => 'Select Category']) !!}
										</div>

<div class="form-group">
											
										<div class="form-group col-md-12">
										<label class="text-semibold"> Image1 : </label>
										<div class="media no-margin-top">
											@if(isset($product))
											@if($product->image1 !=null)
											<div class="media-left">
                    <a href="#"><img src="{{getimg($product->image1)}}"
                                     style="width: 58px; height: 58px; border-radius: 2px;" alt=""></a>
                </div>
            @endif
		@endif
		<div class="media-body">
            <input type="file" class="file-styled" name="image1" data-height="200">
            <span class="help-block">الصيغ المسموح بها : gif, png, jpg , jpeg</span>
        </div>
    </div>
</div>
<div class="form-group">
											
										<div class="form-group col-md-12">
										<label class="text-semibold"> Image2 : </label>
										<div class="media no-margin-top">
											@if(isset($product))
											@if($product->image2 !=null)
											<div class="media-left">
                    <a href="#"><img src="{{getimg($product->image2)}}"
                                     style="width: 58px; height: 58px; border-radius: 2px;" alt=""></a>
                </div>
            @endif
		@endif
		<div class="media-body">
            <input type="file" class="file-styled" name="image2" data-height="200">
            <span class="help-block">الصيغ المسموح بها : gif, png, jpg , jpeg</span>
        </div>
    </div>
</div>
<div class="form-group">
											
										<div class="form-group col-md-12">
										<label class="text-semibold"> Image3 : </label>
										<div class="media no-margin-top">
											@if(isset($product))
											@if($product->image3 !=null)
											<div class="media-left">
                    <a href="#"><img src="{{getimg($product->image3)}}"
                                     style="width: 58px; height: 58px; border-radius: 2px;" alt=""></a>
                </div>
            @endif
		@endif
		<div class="media-body">
            <input type="file" class="file-styled" name="image3" data-height="200">
            <span class="help-block">الصيغ المسموح بها : gif, png, jpg , jpeg</span>
        </div>
    </div>
</div>

			<div class="text-right">
	<button type="submit" class="btn bg-teal-400">Submit form <i class="icon-arrow-left13 position-right"></i></button>
										</div>
</div>
</div>
