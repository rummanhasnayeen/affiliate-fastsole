@extends('profile.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Winter Sale</div>
                <div class="panel-body">
                	Active Winter Sale Catalogue:
                	<?php
                	$wintersale=DB::table('sale')->where('sale_status','=','1')
                				->get();
                	foreach($wintersale as $key){

                	?>
                	<form action="{{url('/')}}/editWintersale/delete/<?php echo $key->sale_id ?>" method="post" >
                		 {{csrf_field() }}
                                    {{$key->sale_header}}
                                    <input type="hidden" name="saleId" value="<?php echo $key->sale_id ?>">
                                     <button type="submit" class="close red" aria-label="Close" > 

                                     <span aria-hidden="true">&times;</span>
                                     </button>
                		
                	</form>
                	<?php
                	}
                	?>
                	<br>
                	Add new Winter Sale Catalogue:
                	<form action="{{url('/')}}/editWintersale/add" method="post" enctype="multipart/form-data" >
	                    {{csrf_field() }}
	                    <input type="text" name="sale_header" placeholder="Enter Header" class="form-control"><br>
	                    <!-- <input type="text" name="sale_footer" placeholder="Enter Footer" class="form-control"><br> -->
	                    <input type="text" name="sale_source_link" placeholder="Enter Source Link" class="form-control"><br>
                        Feature Image:<input type="file" name="sale_pic" class="form-control"/><br>

	                
	                
	                 <button type="submit" class="btn btn-success  btn-block" aria-label="Close" > 
	                    ADD
	                 
	                 </button>
	                </form>

                </div>
             </div>
         </div>
     </div>
</div>                	
@endsection