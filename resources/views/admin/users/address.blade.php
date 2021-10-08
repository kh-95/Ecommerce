<div id="formModal " class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <span id="form_result"></span>


	   <form method="post" id="sample_form"  >
	   @csrf
	   <div class="form-group">
	   <label>Address</label>
	   <div class="cl-md-8">
	<input type ="text"   id ="new address" class="form-control" name="address" placeholder="address">
</div>
</div>
<div class="form-control" aling="center">
<input type ="submit" value="add" id="action-button " name="action-button " class="btn btn-warning">

</div>
	   </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
