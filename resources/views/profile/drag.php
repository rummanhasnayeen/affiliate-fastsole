<?php 
$conn=mysqli_connect("localhost","root","","upwork");
$select="Select * from products NATURAL JOIN images where product_onfocus=1 AND image_feature=1 Order By onfocus_position";
$result=mysqli_query($conn,$select);
$count=mysqli_num_rows($result);
?>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<div class="container">
<a href="http://localhost/upwork03/index.php/home">Back TO Admin Panel</a><br>
<h1>On Focus Position</h1>

<table class="table table-bordered table-striped" id="tablelist">
	<thead>
		<tr>
		<th>P_ID</th><th>P_name</th><th>snapshot</th>
	</tr>
	</thead>
	<tbody>
		<?php 
		if($count<1){}else{
			foreach($result as $row){

		?>
		<tr id="<?php echo $row["product_id"]; ?>">
			<td><?php echo $row["product_id"] ?></td>
			<td><?php echo $row["product_name"] ?></td>
			<td>  <img  src="http://localhost/upwork1/public/img/<?php echo $row["image_name"] ?>" height="50px" width="50px"></td>

			
			<input type="hidden" name="item" id="item" value="<?php $row["product_id"]; ?>">


			
		</tr>
		<?php  
				}
			}
		?>
	</tbody>
	
</table>
</div>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
  <script >
  	var $sortable=$("#tablelist > tbody");
  	$sortable.sortable({
  		stop: function(event,ui){
  			var parameters= $sortable.sortable("toArray");
  			$.post("http://localhost/upwork03/resources/views/profile/studentPosition.php",{value:parameters},function(result){
  				// alert(result);
  			});
  		}
  	});
  </script>