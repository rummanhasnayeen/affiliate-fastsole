<style >

html {
  box-sizing: border-box;
  background: #f3f3f3;
}

*,
*:after,
*:before {
  box-sizing: inherit;
}

.clip { 
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

.svg--source {
  display: none;
}

.svg--icon {
  width: 100%;
  max-width: 5rem;
  height: 100%;
  max-height: 5rem;
  display: block;
  margin: 0 auto;
  fill: currentColor
}

.wrapper {
  width: 100%;
  height: 50%;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  padding: 1rem;
}

.share {
  width: 5rem;
  height: 5rem;
  float: left;
  margin: .5rem 1rem .5rem 0;
  color: #353c4a;
  border: .125rem solid #f3f3f3;
  box-shadow: 0 0 8px 0 rgba(50, 50, 50, 0.15);
  border-radius: 50%;
  transition: 250ms;
  
  &:last-child {
    margin-right: 0
  }
  
  &:hover,
  &:focus {
    //background: #f1f1f1;
  }
  
  &:focus {
    outline-color: inherit;
  }
}

.twitter {
  &:hover,
  &:focus {
    color: #00ACED;
    box-shadow: 0 0 24px 0 #00ACED
  }
}

.github {
  &:hover,
  &:focus {
    color: #4183c4;
    box-shadow: 0 0 24px 0 #4183c4
  }
}

.pinterest {
  &:hover,
  &:focus {
    color: #bd081c;
    box-shadow: 0 0 24px 0 #bd081c
  }
}

.youtube {
  &:hover,
  &:focus {
    color: #cd201f;
    box-shadow: 0 0 24px 0 #cd201f
  }
}

.facebook {
  &:hover,
  &:focus {
    color: #3b5998;
    box-shadow: 0 0 24px 0 #3b5998
  }
}

.google {
  &:hover,
  &:focus {
    color: #dd4b39;
    box-shadow: 0 0 24px 0 #dd4b39
  }
}



/*col-5*/
.stockist {
    background: #fff none repeat scroll 0 0;
    padding-bottom: 10px;
    padding-left: 10px;
    padding-top: 10px;
}
.stockist-item {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 75px;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    overflow: hidden;
}
.stockist-image {
    max-height: 72px;
    text-align: center;
    width: 25%;
}
.stockist-image img {
    display: block;
    height: auto;
    max-height: 70px;
    width: 100%;
    margin-left: 0;
    max-width: 100%;
}
.stockist-release {
    margin-left: 10%;
    text-align: left;
    width: 30%;
}
.stockist-release span.stockist_in_stock {
    color: #08b41f;
    font-size: 15px;
}
.bye-now a {
    background-color: #43c152;
    padding: 7px 30px;
}
.stockist-button a {
    background-color: #0E263E;
    color: #fff;
    display: block;
    padding: 7px 16px;
    font-size: 15px;
    border-radius: 2px;
    text-decoration: none;
}
.stockist-item{
    border-bottom:  1px solid #d7d7d7;
}
</style>
@extends('primeLayout')

@section('content')

 <!-- <script src="http://localhost/upwork03/public/slider/sliderengine/initslider-1.js"></script> -->
 <script type="text/javascript" src="{{ asset('public/slider/sliderengine/initslider-1.js') }}"></script>
      <?php

      //$realproduct  is sent from HomeController
      foreach($RealProduct as $key){
      ?>

<div class="container">
  <div class="bc-icons-2" id="dealcardshadow" >
    <nav aria-label="breadcrumb" >
  <ol class="breadcrumb" style="background-color: #FFFFFF;" >
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{url('/')}}/testreleases">Releases</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$key->product_name}}</li>
  </ol>
</nav>
  </div>
<div class="container" >
  <div class="row bg-white mb-3" id="dealcardshadow">
  
    
      
  <div class="col-md-7 sol-sm-12 pt-3">
        


         <div id="amazingslider-wrapper-1 mb-2" style="display:block;position:relative;max-width:700px;margin:0px auto 107px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
                <?php  foreach($imagegallery as $pics){ ?>
                <li><a href="http://localhost/upwork03/public/img/<?php echo $pics->image_name ?>" target="_self" class="html5lightbox" data-width="700" data-height="500"><img src="http://localhost/upwork03/public/img/<?php echo $pics->image_name ?>" alt=""  title="" data-texteffect="Color box right align" data-duration="2000" /></a>
                </li>
                
                 <?php
                    }
                  ?>

            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
              <?php  foreach($imagegallery as $pics){ ?>
                <li><img src="http://localhost/upwork03/public/img/<?php echo $pics->image_name ?>" alt="<?php echo $pics->image_name ?>" title="<?php echo $pics->image_name ?>" /></li>
                 <?php
                    }
                  ?>
                
            </ul>

           
        </div>
    </div>

    <div class="product-info pt-5 pb-5">
      <div class="product-title">
      <h1 style="font-size: 22px; color: #555;">{{$key->product_name}}</h1>
    </div>
    <div class="release-date">
      <h2 style="color: #555; font-size: 14px; margin-top: 0;">Release Date:   {{$key->product_release_date}}   {{$key->product_release_time}}</h2>
    </div>
    <div class="product-status-info" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
      <div class="product-price">
        <p style=" color: #ea2027;
    float: left;
    font-size: 16px;
    margin-bottom: 0;
    margin-right: 15px; margin: 0 0 10px;">
          <span itemprop="priceCurrency" content="GBP">£</span>
          <span itemprop="price" content="120">{{$key->product_price}}</span>
        </p> 
      </div>
      <div class="product-style-code" style="float: left;margin-right: 15px;">
        <p style="margin: 0 0 10px;">
          &nbsp;&nbsp;Style Code: 
          <span style="color: red;">AV3725-010</span>
        </p>
      </div>
      <div class="product-status" >
        <h3 style="color: green; font-size: 14px;">
          <i class="far fa-check-circle"></i>{{$key->status}}</h3>
      </div>
    </div>

</div>
<div class="product-paragraph">
  <p style="color: #666;font-size: 14px;line-height: 24px;">
{{$key->product_description}}
  </p>
</div>

<!-- Share div -->

<div class="product-share">
    

<div class="wrapper">
  <h2 style="text-align: center;  border-bottom: 3px solid #57c4d0;
    font-size: 24px;display: inline-block;">Share this product:</h2>
<div class="  connect">

  <a href="twitter.com" class="share twitter">
    <svg role="presentation" class="svg--icon">
      <use xlink:href="#svg--twitter" />
    </svg>
    <span class="clip">TWITTER</span>
  </a>

  <a href="" rel="author" class="share google">
    <svg role="presentation" class="svg--icon">
      <use xlink:href="#svg--google" />
      <span class="clip">GOOGLE +</span>
    </svg>
  </a>

  <a href="" rel="author" class="share facebook">
    <svg role="presentation" class="svg--icon">
      <use xlink:href="#svg--facebook" />
      <span class="clip">FACEBOOK</span>
    </svg>
  </a>

  <a href="" class="share github">
    <svg role="presentation" class="svg--icon">
      <use xlink:href="#svg--github" />
      <span class="clip">GITHUB</span>
    </svg>
  </a>

  <a href="" class="share  pinterest">
    <svg role="presentation" class="svg--icon">
      <use xlink:href="#svg--pinterest" />
      <span class="clip">PINTEREST</span>
    </svg>
  </a>

  <a href="" class="share  youtube">
    <svg role="presentation" class="svg--icon">
      <use xlink:href="#svg--youtube" />
      <span class="clip">YOU-TUBE</span>
    </svg>
  </a>

</div>
</div>
  </div>
  <!-- Share div Close -->


  

</div>
<!-- End of col7 -->


      
      <div class="col-md-5 col-sm-12 pt-3">
        <div class="stockist">
          <h2 style="background: #0e263e none repeat scroll 0 0;color: #fff;font-size: 16px;font-weight: 600;margin: 0;padding: 10px;    padding-right: 10px;display: inline-block;padding-right: 5%;">YOU CAN BUY HERE</h2>
          <div class="border-red margin-bottom-15" style="margin-bottom: 15px;"></div>
          <div class="stockist-items">
            <!-- item affiliate start -->
            <?php 

           
            foreach($affiliate as $chabi){

         ?>
            <div class="stockist-item">
              
              <div class="stockist-image">
                <a href="<?php echo $chabi->affiliate_link1.urlencode($chabi->affiliate_link2)   ?>" rel="nofollow" target="_blank" style="color: #337ab7; text-decoration: none; background-color: transparent;">
                  <img src="http://localhost/upwork03/public/img/<?php echo $chabi->affiliate_image ?>" class="img-responsive wp-post-image" alt="" width="130" height="78"> 
                   </a>
              </div>

              <div class="stockist-release">
                <span class="stockist_in_stock">{{$chabi->affiliate_status}}</span>
              </div>
              
              
              <div class="stockist-button bye-now" style="vertical-align: middle;">
                <?php
                if($chabi->affiliate_status=='In Stock' || $chabi->affiliate_status=='Recent Release'){
                ?>
            
              <a href="<?php echo $chabi->affiliate_link1.urlencode($chabi->affiliate_link2)   ?>" rel="nofollow" target="_blank">Buy Now</a>
            
                <?php
              }
              else{
                ?>
               
              <a href="<?php echo $chabi->affiliate_link1.urlencode($chabi->affiliate_link2)   ?>" rel="nofollow" target="_blank">Visit Website</a>
            
                <?php
              }
                ?>
                
                </div>
            </div>
             <?php 
                }
              ?>
            <!-- item affiliate end -->
          </div>
        </div>
      </div>
    
  

  </div>
</div>

</div>
        <?php 
          }
        ?>
<script>
  FontAwesomeConfig = { autoReplaceSvg: 'nest' }
</script>
<svg class="svg--source" width="0" height="0" aria-hidden="true">

  <symbol id="svg--twitter" viewbox="0 -7 15 30">
    <path d="M15.36 3.434c-0.542 0.241-1.124 0.402-1.735 0.476 0.624-0.374 1.103-0.966 1.328-1.67-0.583 0.346-1.23 0.598-1.917 0.733-0.551-0.587-1.336-0.954-2.205-0.954-1.668 0-3.020 1.352-3.020 3.019 0 0.237 0.026 0.467 0.078 0.688-2.51-0.126-4.735-1.328-6.224-3.155-0.261 0.446-0.41 0.965-0.41 1.518 0 1.048 0.534 1.972 1.344 2.514-0.495-0.016-0.961-0.151-1.368-0.378 0 0.013 0 0.025 0 0.038 0 1.463 1.042 2.683 2.422 2.962-0.253 0.069-0.52 0.106-0.796 0.106-0.194 0-0.383-0.018-0.568-0.054 0.384 1.2 1.5 2.073 2.821 2.097-1.034 0.81-2.335 1.293-3.75 1.293-0.244 0-0.484-0.014-0.72-0.042 1.336 0.857 2.923 1.357 4.63 1.357 5.554 0 8.592-4.602 8.592-8.593 0-0.13-0.002-0.261-0.009-0.39 0.59-0.426 1.102-0.958 1.507-1.563z"
    />
  </symbol>

  <symbol id="svg--google" viewbox="-13 -13 72 72">
    <path d="M48,22h-5v-5h-4v5h-5v4h5v5h4v-5h5 M16,21v6.24h8.72c-0.67,3.76-3.93,6.5-8.72,6.5c-5.28,0-9.57-4.47-9.57-9.75
s4.29-9.74,9.57-9.74c2.38,0,4.51,0.82,6.19,2.42v0.01l4.51-4.51C23.93,9.59,20.32,8,16,8C7.16,8,0,15.16,0,24s7.16,16,16,16
c9.24,0,15.36-6.5,15.36-15.64c0-1.17-0.11-2.29-0.31-3.36C31.05,21,16,21,16,21z" />
  </symbol>

  <symbol id="svg--facebook" viewbox="0 -7 16 30">
    <path d="M12 3.303h-2.285c-0.27 0-0.572 0.355-0.572 0.831v1.65h2.857v2.352h-2.857v7.064h-2.698v-7.063h-2.446v-2.353h2.446v-1.384c0-1.985 1.378-3.6 3.269-3.6h2.286v2.503z" />
  </symbol>

  <symbol id="svg--github" viewbox="-30 -30 150 150">
    <path d="M61.896,52.548c-3.59,0-6.502,4.026-6.502,8.996c0,4.971,2.912,8.999,6.502,8.999
    c3.588,0,6.498-4.028,6.498-8.999C68.395,56.574,65.484,52.548,61.896,52.548z M84.527,29.132c0.74-1.826,0.777-12.201-3.17-22.132
    c0,0-9.057,0.993-22.76,10.396c-2.872-0.793-7.736-1.19-12.597-1.19s-9.723,0.396-12.598,1.189C19.699,7.993,10.645,7,10.645,7
    c-3.948,9.931-3.913,20.306-3.172,22.132C2.834,34.169,0,40.218,0,48.483c0,35.932,29.809,36.508,37.334,36.508
    c1.703,0,5.088,0.004,8.666,0.009c3.578-0.005,6.965-0.009,8.666-0.009C62.191,84.991,92,84.415,92,48.483
    C92,40.218,89.166,34.169,84.527,29.132z M46.141,80.574H45.86c-18.859,0-33.545-2.252-33.545-20.58
    c0-4.389,1.549-8.465,5.229-11.847c6.141-5.636,16.527-2.651,28.316-2.651c0.045,0,0.093-0.001,0.141-0.003
    c0.049,0.002,0.096,0.003,0.141,0.003c11.789,0,22.178-2.984,28.316,2.651c3.68,3.382,5.229,7.458,5.229,11.847
    C79.686,78.322,65,80.574,46.141,80.574z M30.104,52.548c-3.588,0-6.498,4.026-6.498,8.996c0,4.971,2.91,8.999,6.498,8.999
    c3.592,0,6.502-4.028,6.502-8.999C36.605,56.574,33.695,52.548,30.104,52.548z" />
  </symbol>

  <symbol id="svg--pinterest" viewbox="-180 -180 850 850">
    <path d="M430.149,135.248C416.865,39.125,321.076-9.818,218.873,1.642
        C138.071,10.701,57.512,76.03,54.168,169.447c-2.037,57.029,14.136,99.801,68.399,111.84
        c23.499-41.586-7.569-50.676-12.433-80.802C90.222,77.367,252.16-6.718,336.975,79.313c58.732,59.583,20.033,242.77-74.57,223.71
        c-90.621-18.179,44.383-164.005-27.937-192.611c-58.793-23.286-90.013,71.135-62.137,118.072
        c-16.355,80.711-51.557,156.709-37.3,257.909c46.207-33.561,61.802-97.734,74.57-164.704
        c23.225,14.136,35.659,28.758,65.268,31.038C384.064,361.207,445.136,243.713,430.149,135.248z" />
  </symbol>

  <symbol id="svg--youtube" viewbox="-150 -150 800 800">
    <path d="M459,61.2C443.7,56.1,349.35,51,255,51c-94.35,0-188.7,5.1-204,10.2C10.2,73.95,0,163.2,0,255s10.2,181.05,51,193.8
      C66.3,453.9,160.65,459,255,459c94.35,0,188.7-5.1,204-10.2c40.8-12.75,51-102,51-193.8S499.8,73.95,459,61.2z M204,369.75v-229.5
      L357,255L204,369.75z" />
  </symbol>

</svg>

@endsection