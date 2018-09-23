@extends('profile.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Winter Sale</div>
	            <div class="panel-body" style="padding-bottom: 5%;" >
	            	 @if(session('message'))
                       <div class="alert alert-success">
                          {{ session('message') }}
                       </div> 
                     @endif
	            	<?php
	            	$sl=1;
	            	foreach($messages as $key){
	            		
	            	?>
	            	
	            		<?php echo $sl++." . "; ?>Sent By: {{$key->name}} <br> 
	            		Sender E-mail Address: {{$key->email}}<br>  
	            		Subject: {{$key->subject}} <br> 
	            		Message:  <?php echo $key->message; ?><br>
	            		

                      <div class="input-group-btn"> 
	                    <button class="btn btn-success btn-block" type="button" >
	                    	
	                    	<a href="{{url('/')}}/removeMessage/<?php echo $key->message_id ?>" style="color: white;">
	                    		REMOVE
	                    	</a>
	                    </button>
	                  </div>

	            		
	            	
	            	<!-- <div class="border-red"></div> -->


	            	<?php
	            	}
	            	?>
	            </div>
            </div>
        </div>
    </div>
</div>               
@endsection