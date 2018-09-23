<?php
foreach($_POST["value"] as $key=>$value){
	$data["onfocus_position"]=$key+1;
	updatePosition($data,$value);
} 
echo "Sorting done";
function updatePosition($data,$id){
	$con=mysqli_connect("localhost","root","","upwork");
	if(array_key_exists("product_name", $data)){
		$data["product_name"]=$this->real_escape_string($data["product_name"]);
	}
	foreach($data as $key=>$value){
		$value="'$value'";
		$updates[]="$key=$value";
	}
	$imploadAray=implode(",",$updates);
	$query="Update products Set $imploadAray Where product_id='$id'";
	$result=mysqli_query($con,$query) or die(mysqli_error($con));
	if($result){
		return "Catagory positioned";
	}
	else{
		return "Error while updating";
	}
}

?>