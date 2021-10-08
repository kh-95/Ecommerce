

<script src="/admin/js/jquery-1.11.1.min.js"></script>
	<script src="/admin/js/bootstrap.min.js"></script>
	<script src="/admin/js/chart.min.js"></script>
	<script src="/admin/js/chart-data.js"></script>
	<script src="/admin/js/easypiechart.js"></script>
	<script src="/admin/js/easypiechart-data.js"></script>
	<script src="/admin/js/bootstrap-datepicker.js"></script>
	<script src="/admin/js/custom.js"></script>
	
	<!-- <script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};

	</script> -->
<script type="text/javascript">

$(document).ready(function(){

var i= 1;
$('#add').click(function(){
  i++;
$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="address[]" id="address" class="form-control name_list" placeholder="Enter Address"></td><td><button name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');

});

$(document).on('click','.btn_remove',function(e){
	e.preventDefault();
var button_id =$(this).attr("id");
alert(button_id);
$('#row'+button_id +'').remove();

});

$('#add_address').on('submit',function(e){

	e.preventDefault();
	var form_data=$(this).serialize();
$.ajax({
url:"{{route('users.store')}}",
method:"POST",
data:form_data,
dataType:"json",

success:function(data){


	alert(data);
//  $('#add_address')[0].reset();
}

});



});



});

</script>

<script>

$(document).ready(function(){

$('.editbtn').on('click',function(){

$('#categoryeditModal').modal('show');
$tr=$(this).closest('tr');
var data= $tr.children("td").map(function(){
return $(this).text();
}).get();
// console.log(data);
$('#catid').val(data[0]);
$('#catname').val(data[1]);

});

$('#editformId').on('submit',function(e){
	e.preventDefault();
	var id= $('#catid').val();
	 var name =$('#catname').val();
	//  alert(name);
$.post({

type:"PUT",
url:"/admin/en/admin/categories/update/"+id,
data:$('#editformId').serialize(),


success:function(response){

	console.log(response);
	$('#categoryeditModal').modal('hide');
	alert("Data Updated");
	location.reload();

},
error:function(error){
//  console.log(error);

}


	});
});

});
</script>


<script>
var category_id ;

$(document).on('click','.delete',function(){
	category_id =$(this).attr('id');
	$('#confirmModal').modal('show');
	$('#close_button').click(function(){

$.ajax({
	
url:"/admin/en/admin/user_destroy/destroy/"+id,
beforsend:function(){

	$('#close_button').text('Deleting ...');	
},
success:function(data){

	setTimeout(function()  {
		$('#confirmModal').modal('show');
		$('#categorytable').DataTable().ajax().reload();
	}, 2000);
}

});

	});




});

</script>




















</body>
</html>