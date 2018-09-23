
@extends('primeLayout')

@section('content')
<div class="container"  style="padding-right: 0px;padding-left: 0px;">
	<nav class="navbar navbar-expand-lg  navbar-light bg-light" >
		<a class="navbar-brand" href="{{url('/')}}/newscatalogue" style="font-size: 17px; color: #555;">Home>News</a>
	</nav>
	<div class="border-offwhite"></div>
</div>
<div class="container"  style="padding-right: 0px;padding-left: 0px;" >
	
    <div class="row" >
    	<?php 
       
        foreach($allnews as $key){
        ?>
        <div class="col-sm-12 mb-2">
            
                
                	<div class="card" style="width: auto;">
					  <div class="card-body" style="height: 100%;" >
					  	<div class="row">
					  		<div class="col-sm-4 border-right border-dark" style="width: 360px; height: 240px;">
					  			<div class="view zoom">
					  			<img class="card-fluid" style="max-height: 100%; max-width: 100%;" src="http://localhost/upwork03/public/img/<?php echo $key->news_image_name ?>">
					  			</div>
					  		</div>
					  		<div class="col-sm-8" >
					    		<h5 class="card-title mb-2" style="font-size: 25px;"><?php echo $key->news_title ?></h5>
					    		<p class="card-text" style="font-size: 18px;  ">
					    			<small class="text-muted">Posted In: <?php echo $key->news_source ?></small></p>
					    		
					    		<p class="card-text text-truncate"><?php echo $key->news_description ?></p>
					    		<a href="{{url('/')}}/newsSingle/<?php echo  $key->news_id ?>" class="btn btn-dark float-right">View Details News</a>
					    	</div>
					    </div>
					  </div>
					</div>
				
			
		</div>
		<?php
		}
		?>	
        <div class="pull-right " style="margin-left: 40% !important;">
            {{$allnews->links()}}
        </div>
	</div>


<!--Pagination -->

  




</div>
@endsection