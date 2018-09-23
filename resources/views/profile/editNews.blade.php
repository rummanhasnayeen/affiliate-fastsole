@extends('profile.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Winter Sale</div>
                <div class="panel-body">
                	Added News:
                	<?php
                	$news=DB::table('news')->where('news_status','=','1')
                				->get();
                	foreach($news as $key){

                	?>

                	<form action="{{url('/')}}/editNews/delete/<?php echo $key->news_id ?>" method="post" >
                		 {{csrf_field() }}
                                    <p><b>{{$key->news_title}}</b>, 
                                    <i>{{$key->news_source}}</i>, 
                                    <u>{{$key->news_date}}</u>


                                    <input type="hidden" name="saleId" value="<?php echo $key->news_id ?>">
                                     <button type="submit" class="close red" aria-label="Close" > 

                                     <span aria-hidden="true">&times;</span>
                                     </button>
                                     </p>
                		
                	</form>
                	<?php
                	}
                	?>
                	<br>
                	Add new News:
                	<form action="{{url('/')}}/editNews/add" method="post" enctype="multipart/form-data" >
	                    {{csrf_field() }}
	                    <input type="text" name="news_title" placeholder="Enter News Title" class="form-control"><br>
	                    <input type="text" name="news_source" placeholder="Enter News Source" class="form-control"><br>
	                     <pre><textarea name="news_short_description" class="form-control" rows="3" placeholder="short news description"></textarea></pre><br>
                        <pre><textarea name="news_description" class="form-control" rows="3" placeholder="news description"></textarea></pre><br>
	                    

                        Feature Image:<input type="file" name="news_pic" class="form-control"/><br>

	                
	                
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