@extends('profile.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" >Edit Product Features</div>

                <div class="panel-body">
                  <?php
                  $allsneakers = DB::table('products')
                       ->join('images', 'products.product_id', '=', 'images.product_id')
                       ->join('status', 'products.product_status', '=', 'status.status_id')
                       // ->join('affiliates','products.product_id','=','affiliates.product_id')
                       // ->join('search_temp','products.product_id','=','search_temp.product_id')
                       
                       ->where('images.image_feature', '=', 1)
                       
                       ->get();
                       foreach($allsneakers as $key){

                  ?>

                      <p>
                <a class="btn btn-warning" data-toggle="collapse" href="#collapseExample<?php echo $key->product_id ?>" role="button" aria-expanded="false" aria-controls="collapseExample<?php echo $key->product_id ?>"  style="display: flex">
                  {{$key->product_name}}    &emsp;<img  src="http://localhost/upwork1/public/img/<?php echo $key->image_name ?>" height="50px" width="50px">
                </a>
                 
              </p>
            <div class="collapse" id="collapseExample<?php echo $key->product_id ?>">
                  <div class="card card-body">
                    
                                <h4>Old affiliates</h4><br>

                    <?php
                      $oldaffiliates=DB::table('products')
                                    ->join('affiliates','products.product_id','=','affiliates.product_id')
                                    ->where('affiliates.product_id','=',$key->product_id)
                                    ->get();
                                foreach($oldaffiliates as $chabi){
                                  

                      ?>
                      <form method="post" action="{{url('/')}}/affiliateChange">
                                      {{csrf_field() }}
                      <!--
                      newDate
                      status
                      affiliate_id
                      -->
                        <img src="http://localhost/upwork1/public/img/<?php echo $chabi->affiliate_image ?>" style="max-height: 60px;max-width: 60px;" >
                        <b>Current Release date:</b> {{$chabi->affiliate_release_date }} <br>
                        <b>New Release Date:</b> <input type="date" name="newDate" placeholder="<?php echo $chabi->affiliate_release_date ?>"><br>
                        Change Affiliate Status: <br><b>Current status</b> {{$chabi->affiliate_status}}<br>
                        <b>New status</b><br>
                        <!-- start-->
                        <select name="status" >
                                                    <?php 
                                                        $statuses = DB::table('status')
                                                        ->where('status','!=',$chabi->affiliate_status)                ->get();
                                                    foreach ($statuses as $tala ) { ?>
                                                  <option value="<?php echo $tala->status  ?>"  >{{$tala->status}}
                                                  </option>
                                                  
                                                  <?php } ?>
                                                </select><br>
                        <!--end-->


                        <input type="hidden" name="affiliate_id" value="<?php echo $chabi->affiliate_id ?>">
                        <input type="submit" name="submit" value="Confirm affiliate Change" class="btn btn-success  btn-block">
                      

                      </form>

                      <?php
                        }
                      ?>
                    
                    <form method="post" action="{{url('/')}}/productChange" enctype="multipart/form-data">
                                {{csrf_field() }}

                      <input type="hidden" name="product_id" value="<?php echo $key->product_id;  ?>">
                      Product name:<b>{{$key->product_name}}</b><br>
                      Product brand:<b>{{$key->product_brand}}</b><br>
                      <b>Change release date? :</b> <input type="date" name="release_date"><br>
                      <h3>Include an affiliate</h3>

            Affiliate link 1:<input type="text" name="affiliate11" class="form-control" style="width: 50%;"> + <input type="text" name="affiliate12" class="form-control" style="width: 50%;">
                Affiliate Image1:<input type="file" name="affiliateImage1" class="form-control"/><br>

              
                      <button type="submit" name="productChange" class="btn btn-success  btn-block" >
                                    Confirm Product Change
                                </button>

                    </form>
                  </div>
            </div>

            <?php

          }

            ?>
                </div>
             </div>
         </div>    
    
  </div>
  
</div>

@endsection