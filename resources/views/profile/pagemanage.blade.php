@extends('profile.master')

@section('content')
<div class="container"> 
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin</div>

                <div class="panel-body">
                    <a href="http://localhost/upworkcopy/resources/views/profile/drag.php">Adjust On focus Position</a>
                   

                    <h2>On Focus Products:</h2>
                    <ul>
                        <?php
                        $brands = DB::table('products')->where('product_onfocus','=','1')                                         
                                        ->get();
                             foreach ($brands as $key ) {

                        ?>

                        <li>
                                    <form action="{{url('/')}}/remove_onfocus" method="post" class="form-horizontal">
                                        {{csrf_field() }}
                                    {{$key->product_name}}
                                    <input type="hidden" name="productId" value="<?php echo $key->product_id ?>">
                                     <button type="submit" class="close red" aria-label="Close" > 

                                     <span aria-hidden="true">&times;</span>
                                     </button>
                                    </form>

                         </li>

                            <?php
                            }
                            ?>

                            <li>
                                <form action="{{url('/')}}/add_onfocus" method="post" >
                                        {{csrf_field() }}
                                    
                                   Add new On focus: 

                                                <select name="product_name" class="form-control">
                                                    <?php 
                                                        $brands = DB::table('products')
                                                        ->where('product_onfocus','!=','1')                                         
                                                                                                 
                                                            ->get();
                                                    foreach ($brands as $key ) { ?>
                                                  <option value="<?php echo $key->product_name  ?>"  >{{$key->product_name}}</option>
                                                  
                                                  <?php } ?>
                                                </select><br>
                                     <button type="submit" class="btn btn-success  btn-block"  > 
                                        ADD
                                     
                                     </button>
                                    </form>
                            </li>
                            
                    </ul>
 @if(count($errors)>0)
                            <div style="background-color: #F5F8FA; padding-left: 0px;padding-right: 0px;">
                          @foreach($errors->all() as $key)
                          <div class="alert alert-danger text-center ">
                            * {{$key}}
                          </div>
                          @endforeach
                        </div>
                      @endif

                     <h2>Add Slider Images:(780*400)</h2>
                    <ul>
                        <?php
                        $brands = DB::table('images_sliders')                                         
                                        ->get();
                             foreach ($brands as $key ) {

                        ?>

                        <li>
                        	<center> <img src="http://localhost/upworkcopy/img/<?php echo $key->image_slider_name ?>" style="max-height: 100px;max-width: 100px;"></center>
                                    <form action="{{url('/')}}/remove_slider" method="post" >
                                        {{csrf_field() }}
                                    
                                    <input type="hidden" name="sliderId" value="<?php echo $key->image_slider_id ?>">
                                     <button type="submit" class="close red" aria-label="Close" > 

                                     <span aria-hidden="true">&times;</span>
                                     </button>
                                    </form>

                         </li>

                            <?php
                            }
                            ?>
                            <li>
                                <form action="{{url('/')}}/add_slider" method="post" enctype="multipart/form-data">
                                        {{csrf_field() }}
                                    
                                <input type="file" name="pic" class="form-control"/><br>
                                   
                                     <button type="submit" class="btn btn-success  btn-block" aria-label="Close" > 
                                        ADD
                                     
                                     </button>
                                    </form>
                            </li>
                            
                    </ul>

<h2>Add Banner:(570*80)</h2>
                    <ul>
                        <?php
                        $banners = DB::table('banners')                                         
                                        ->get();
                             foreach ($banners as $key ) {

                        ?>

                        <li>
                            <img src="http://localhost/upwork1/public/img/<?php echo $key->banner_image ?>" style="max-height: 40px;max-width: 40px;">
                                    <form action="{{url('/')}}/remove_banner" method="post" >
                                        {{csrf_field() }}
                                    
                                    <input type="hidden" name="bannerId" value="<?php echo $key->banner_id ?>">
                                     <button type="submit" class="close red" aria-label="Close" > 

                                     <span aria-hidden="true">&times;</span>
                                     </button>
                                    </form>

                         </li>

                            <?php
                            }
                            ?>
                            <li>
                                <form action="{{url('/')}}/add_banner" method="post" enctype="multipart/form-data">
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
