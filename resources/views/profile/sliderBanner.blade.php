@extends('profile.master')

@section('content')
<div class="container"> 
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin</div>

                <div class="panel-body">
                     @if(session('success'))
                       <div class="alert alert-success">
                          {{ session('success') }}
                       </div> 
                     @endif
                      @if(session('warning'))
                       <div class="alert alert-warning">
                          {{ session('warning') }}
                       </div> 
                     @endif

	
                <ul>
                	<h2>Current Slidder Banner:</h2>
                    <?php
                    $banners = DB::table('slider_banner')                                         
                                    ->get();
                         foreach ($banners as $key ) {

                    ?>

                    <li>
                        <img src="http://localhost/upworkcopy/img/<?php echo $key->slider_banner_image ?>" style="max-height: 40px;max-width: 40px;">
                                <form action="{{url('/')}}/remove_slider_banner" method="post" >
                                    {{csrf_field() }}
                                
                                <input type="hidden" name="bannerId" value="<?php echo $key->slider_banner_id ?>">
                                 <button type="submit" class="close red" aria-label="Close" > 

                                 <span aria-hidden="true">&times;</span>
                                 </button>
                                </form>

                     </li>

                        <?php
                        }
                        ?>
                        <li>
                        	<h2>Add Slidder Banner:</h2>
                            <form action="{{url('/')}}/add_slider_banner" method="post" enctype="multipart/form-data">
                                    {{csrf_field() }}
                                
                            <input type="file" name="pic" class="form-control"/><br>
                               
                                 <button type="submit" class="btn btn-success  btn-block"  > 
                                    ADD
                                 
                                 </button>
                                </form>
                        </li>
                        
                </ul>

                </div>
            </div>
        </div>
    </div>
</div>            
@endsection