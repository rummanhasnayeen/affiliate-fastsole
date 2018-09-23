@extends('profile.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Uk Shoes</div>
                <div class="panel-body">
                    

                    <h2>BRANDS:</h2>

                      @if(session('warningbrand'))
                       <div class="alert alert-warning">
                          {{ session('warningbrand') }}
                       </div> 
                     @endif
                                          @if(session('successbrand'))
                       <div class="alert alert-success">
                          {{ session('successbrand') }}
                       </div> 
                     @endif
                    <ul>
                        <?php
                        $brands = DB::table('brands')                                         
                                        ->get();
                             foreach ($brands as $key ) {

                        ?>

                        <li>
                                    <form action="{{url('/')}}/remove_brand" method="post" class="form-horizontal">
                                        {{csrf_field() }}
                                    {{$key->brand_name}}
                                    <input type="hidden" name="brandId" value="<?php echo $key->brand_id ?>">
                                     <button type="submit" class="close red" aria-label="Close" > 

                                     <span aria-hidden="true">&times;</span>
                                     </button>
                                    </form>

                         </li>

                            <?php
                            }
                            ?>
                            <li>
                                <form action="{{url('/')}}/add_brand" method="post" >
                                        {{csrf_field() }}
                                    
                                    <input type="text" name="newBrand" placeholder="ADD NEW BRAND" class="form-control"><br>
                                    <input type="text" name="newBrandDescription" placeholder="BRAND Description" class="form-control"><br>

                                     <button type="submit" class="btn btn-success  btn-block" aria-label="Close" > 
                                        ADD
                                     
                                     </button>
                                    </form>
                            </li>
                    </ul>
                    
                    <br>
                    
                    <hr style="background-color: red; height: 1px; border: 0;">
                    
                    <br>
                     @if(count($errors)>0)
                            <div style="background-color: #F5F8FA; padding-left: 0px;padding-right: 0px;">
                          @foreach($errors->all() as $key)
                          <div class="alert alert-danger text-center ">
                            * {{$key}}
                          </div>
                          @endforeach
                        </div>
                      @endif
                    <h2>Add Products:</h2>
                     @if(session('successproduct'))
                       <div class="alert alert-success">
                          {{ session('successproduct') }}
                       </div> 
                     @endif
                    

                   
                          

                          

                            <form action="{{url('/')}}/add_product" method="post"  enctype="multipart/form-data" >
                                {{csrf_field() }}
          Product Name: <input type="text" name="product_name" class="form-control"><br>
          Product Description:<pre><textarea name="product_description" class="form-control" rows="3"></textarea></pre><br>
          Product Price: <input type="text" name="product_price" class="form-control"><br>

          Product Images:
          Feature Image:(700*450)<input type="file" name="featurepic" class="form-control"/><br>
          Other Images:(700*450)
                                <!--multiple field start-->
                                <hr style="background-color: red; height: 1px; border: 0;">
         <div class="input-group control-group increment" id="incrementpic">
            <input type="file" name="otherpic[]" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-success" type="button" id="newpic"><i class="glyphicon glyphicon-plus"></i>Add</button>
            </div>
          </div>
          <div class="clone hide" id="clonepic">
            <hr style="background-color: red; height: 1px; border: 0;">
            <div class="control-group input-group"  id="controlparentpic">
              <input type="file" name="otherpic[]" class="form-control">
              <div class="input-group-btn"> 
                <button class="btn btn-danger" type="button" id="removepic"><i class="glyphicon glyphicon-minus"></i> Remove</button>
              </div>
            </div>
          </div>

                                <!--multiple field end-->

                               

          <br>  Product Brand: 

                            <select name="product_brand_name" class="form-control">
                                <?php foreach ($brands as $key ) { ?>
                              <option value="<?php echo $key->brand_name  ?>"  >{{$key->brand_name}}</option>
                              
                              <?php } ?>
                            </select>
            <br>
            Product Status:
                            <select name="product_status" class="form-control">
                                <?php 
                                $status = DB::table('status')                                         
                                         ->get();

                                foreach ($status as $key ) { ?>
                              <option value="<?php echo $key->status_id  ?>"  >{{$key->status}}</option>
                              
                              <?php } ?>
                            </select>
        Release date: <input type="date" name="product_release_date" class="form-control"><br>
        Release time: <input type="time" name="product_release_time" class="form-control">
        <!--multiple affiliate links-->
        <!--multiple affiliate links end-->


                              
                                 <!--multiple field start-->
                                 <hr style="background-color: red; height: 1px; border: 0;">
             <div class="input-group control-group increment" id="incrementaffiliate">

               
               Affiliate link :<br><input type="text" name="affiliate1[]" class="form-control-block" style="width: 50%;" placeholder="FIRST LINK"> 
               <br>
               
               <input type="text" name="affiliate2[]" class="form-control-block" style="width: 50%;" placeholder="SECOND LINK"><br><br><br>
              Affiliate Image:(130*78)<input type="file" name="affiliateImage[]" /><br>
              Affiliate Release Date:<input type="date" name="affiliate_release_date[]"><br>
              Affiliate Status:<select name="affiliate_status[]" ><br>
                                  <?php 
                                      $statuses = DB::table('status')
                                                        ->get();
                                  foreach ($statuses as $tala ) { ?>
                                <option value="<?php echo $tala->status  ?>"  >{{$tala->status}}
                                </option>
                                
                                <?php } ?>
                              </select>
                <div class="input-group-btn"> 
                  <button class="btn btn-success" type="button" id="newaffiliate"><i class="glyphicon glyphicon-plus"></i>Add</button>
                </div>
              </div>

              <div class="clone hide" id="cloneaffiliate">
                <hr style="background-color: red; height: 1px; border: 0;">
                <div class="control-group input-group"  id="controlparentaffiliate">
                   Affiliate link :<br><input type="text" name="affiliate1[]" class="form-control" style="width: 50%;" placeholder="FIRST LINK"> 
               <br>
                
               <input type="text" name="affiliate2[]" class="form-control" style="width: 50%;" placeholder="SECOND LINK"><br><br><br>
              Affiliate Image:(130*78)<input type="file" name="affiliateImage[]" /><br>
              Affiliate Release Date:<input type="date" name="affiliate_release_date[]"><br>
              Affiliate Status:<select name="affiliate_status[]" ><br>
                                  <?php 
                                      $statuses = DB::table('status')
                                                        ->get();
                                  foreach ($statuses as $tala ) { ?>
                                <option value="<?php echo $tala->status  ?>"  >{{$tala->status}}
                                </option>
                                
                                <?php } ?>
                              </select>
                  <div class="input-group-btn"> 
                    <button class="btn btn-danger" type="button" id="removeaffiliate"><i class="glyphicon glyphicon-minus"></i> Remove</button>
                  </div>
                </div>
              </div>
                <hr style="background-color: red; height: 1px; border: 0;">
                  


                

                                <!--multiple field end-->
                         
                                                
                                <button type="submit" name="add_product" class="btn btn-success  btn-block" >
                                    ADD
                                </button>



                                
                            </form>



                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">


                    $(document).ready(function() {

                      $("#newpic").click(function(){ 
                          var html = $("#clonepic").html();
                          $("#incrementpic").after(html);
                      });

                      $("body").on("click","#removepic",function(){ 
                          $(this).parents("#controlparentpic").remove();
                      });
                      $("#newaffiliate").click(function(){ 
                          var html = $("#cloneaffiliate").html();
                          $("#incrementaffiliate").after(html);
                      });

                      $("body").on("click","#removeaffiliate",function(){ 
                          $(this).parents("#controlparentaffiliate").remove();
                      });

                    });

                </script>
                 
@endsection
