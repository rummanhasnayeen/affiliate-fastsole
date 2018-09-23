<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="http://localhost/upwork03/img/fav-icon.png" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="http://localhost/upwork03/cssC/36d7a.css" media="all" />
    <link rel="stylesheet" type="text/css" href="http://localhost/upwork03/cssC/responsive.css">
    <title>Sneaker Stores Online</title>
 
    <script type='text/javascript' src='http://localhost/upwork03/jsC/jquery.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsC/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsC/addtoany.min.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsC/jquery.min.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsC/initslider-1.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsC/scripts.js'></script>
</head>

<body data-rsssl=1 class="home page-template-default page page-id-222">

    <div class="fakeloader1"></div>
    <style type="text/css">
        .deal p {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            color: #fff;
            margin-bottom: 0;
            min-height: 0;
            padding: 5px;
        }

        .deal-single {
            min-height: 310px;
        }

    </style>
    <!-- top navigation prime layout toggle -->
  
    <div class="right-side-menu"><a class="close-sidenav"><i
class="fa fa-close" aria-hidden="true"></i></a><a href="#" class="sidenav-logo"><img
src="http://localhost/upwork03/img/footer-logo.png" alt=""></a>
        <div class="menu-main-menu-container">
            <ul id="menu-main-menu" class="sidenav-menu">
                <li id="menu-item-236" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-222 current_page_item menu-item-236"><a href="{{url('/')}}">Home</a></li>
                <li id="menu-item-27473" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27473"><a href="{{url('/')}}/testreleases">Releases</a></li>
                <li id="menu-item-27088" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27088"><a href="{{url('/')}}/testwintersale">Mid Season Deals</a></li>
                <li id="menu-item-234" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-234"><a href="#">News</a></li>
                <li id="menu-item-27490" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-27490"><a href="#">Brands</a>
                    <ul class="sub-menu">
                         <?php 
                $brands=DB::table('brands')->limit(7)->get();
                foreach($brands as $key){ 
                ?>

                        <li id="menu-item-27494" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-27494">
                            <a href="{{url('/')}}/testbrand/<?php echo $key->brand_name ?>">
                                {{$key->brand_name}}</a>
                        </li>
<?php 
                                  }
                                  ?>
                       
                    </ul>
                </li>
                <li id="menu-item-27790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27790"><a href="{{url('/')}}/testabout">About Us</a></li>
            </ul>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="content-wrapper-overlay"></div>
        <div class="mobile-menu-section-wrapper hidden-md hidden-lg">
            <div class="mobile-menu-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-3 mobile-menu-left-col">
                            <div class="mobile-menu-toggle"><span class="open-left-menu"></span>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="mobile-menu-logo"><a href="#"><img
src="http://localhost/upwork03/img/logo.png" alt=""></a></div>
                        </div>
                        <div class="col-xs-3 mobile-menu-right-col">
                            <div class="mobile-menu-toggle text-right"><span class="open-right-menu"><span
class="text">Menu</span><i class="fa fa-bars"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-section wow fadeInDown" data-wow-delay="0s">
            <div class="header-top ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 site-logo">
                            <div class="logo">
                                <a href="#"><img
src="http://localhost/upwork03/img/logo.png" class="img-responsive" alt=""></a></div>
                        </div>
                        <div class="col-md-6 navbar-form-col">
                           <form class="navbar-form clearfix" role="search" action="{{url('/')}}/randomSearchtest" method="get">
                                <div class="input-group search">
                                    <input type="text" class="form-control" placeholder="Search" name="randomSearch" id="s">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i
class="glyphicon glyphicon-search"></i></button></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3 header-social-button col-sm-7 col-xs-9">
                            <ul>
                                <li><a href=""><i
class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href=""><i
class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i
class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- navbar normal primelayout -->
            <div class="header-bottom-wrapper">
                <div class="header-bottom" id="sticky-header">
                    <div class="container">
                        <div class="row bg-white margin-padding-0">
                            <div class="col-md-2 margin-padding-0 sticky-brand-col">
                                <div class="brand">
                                    <img src="http://localhost/upwork03/img/shoe_icon.png" class="img-responsive" alt="">
                                    <h3>BRANDS</h3>
                                    <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
                            </div>
                            <div class="sticky-logo-col">
                                <a href="#"><img
src="http://localhost/upwork03/img/logo.png" class="img-responsive" alt=""></a></div>
                            <div class="col-md-8 margin-padding-0 sticky-menus-col">
                                <div class="header-middle container-fluid">
                                    <div id="main-nav" class="stellarnav">
                                        <ul id="menu-main-menu-1" class="menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-222 current_page_item menu-item-236"><a href="{{url('/')}}">Home</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27473"><a href="{{url('/')}}/testreleases">Releases</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27088"><a href="{{url('/')}}/testwintersale">Mid Season Deals</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-234"><a href="{{url('/')}}/testnewscatalogue">News</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-27490"><a href="#">Brands</a>
                                                <ul class="sub-menu">
                                                                           <?php 
                $brands=DB::table('brands')->limit(7)->get();
                foreach($brands as $key){ 
                ?>

                        <li id="menu-item-27494" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-27494">
                            <a href="{{url('/')}}/testbrand/<?php echo $key->brand_name ?>">
                                {{$key->brand_name}}</a>
                        </li>
<?php 
                                  }
                                  ?>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27790"><a href="{{url('/')}}/testabout">About Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="header-social-button sticky-social-col">
                                <ul>
                                    <li><a href="#"><i
class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i
class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i
class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="border-red"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- slider welcome blade -->
        <div class="slider-section  wow fadeInDown" data-wow-delay="0.5s">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 margin-padding-0 slider-section-slides">
                        <div class="nivoSlider" id="slider">
                            <?php
               $sliderimage = DB::table('images_sliders')
                                       ->get();
                                       
                                       foreach ($sliderimage as $key) {
              ?>

                            
                            <img src="http://localhost/upwork03/img/<?php echo $key->image_slider_name ?>" class="img-responsive" alt="ohMaiGodSaleBy43">
                            
                             <?php 
                                  }
                                  ?>

</div>
                    </div>
                    <!-- slider banner welcome -->
                    <div class="col-sm-2 header-banner slider-section-banners">
 <?php
                       $sliderbannerimage = DB::table('slider_banner')->limit(2)
                                       ->get();
                                       foreach($sliderbannerimage as $key){
                      ?>
                        <div class="col-md-12 padding-left-0">
                            <a href="<?php echo $key->slider_banner_source ?>" target="_blank">
                            <img
src="http://localhost/upwork03/img/<?php echo $key->slider_banner_image ?>" class="img-responsive ctrl_0" alt="adidas sale">
</a>
</div>
  <?php
                           }
                             ?>

                       

                    </div>
                </div>
            </div>
        </div>
        <!-- onfocus pc -->
        <div class="onfocus-slider wow fadeInDown" data-wow-delay="0.25s">
            <div class="container">
                <div class="row on-focus-slider">
                    <div class="col-md-12 onfocus-header">
                        <div class="on-focus-header">
                            <div class="col-md-2 margin-padding-0">
                                <div class="brand">
                                    <img src="http://localhost/upwork03/img/shoe_icon.png" class="img-responsive" alt="">
                                    <h3>On Focus</h3>
                                </div>
                            </div>
                            <div class="col-md-10 on-focus-header-border">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <div class="on-focus-header-right">
                                        <a href="{{url('/')}}/testreleases"><i
class="fa fa-eye" aria-hidden="true"></i> View All</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="border-red"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-12 margin-padding-0">
                            <div id="on-focus" class="owl-carousel">
                                <!-- individual product card -->
                                <?php 
                        $onfocusproducts = DB::table('products')
                       ->join('images', 'products.product_id', '=', 'images.product_id')
                       ->join('status', 'products.product_status', '=', 'status.status_id')
                       ->where('products.product_onfocus','=', 1 )
                       ->where('images.image_feature', '=', 1)
                       ->orderBy('products.onfocus_position')

                       ->get();
                       foreach($onfocusproducts as $key){
                      ?>
                                <article id="post-35699" class="post-35699 sneaker type-sneaker status-publish has-post-thumbnail department-nikes colour-black colour-white status-coming-soon status-on-focus">
                                    <div class="single-sneaker jj">
                                        <div class="row col-md-12 margin-padding-0">
                                            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 margin-padding-0">
                                                <div class="sneaker-status">
                                                    <p><span class="stockist_coming-soon"> <?php echo $key->status ?></span></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-padding-0 text-responsive">
                                                <div class="release-date">
                                                    <p>{{$key->product_release_date}} </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ih-item square colored effect6 bottom_to_top">
                                            <a href="{{url('/')}}/testproduct/<?php echo $key->product_id ?>">
                                                <div class="img"><img width="350" height="220" src="http://localhost/upwork03/img/<?php echo $key->image_name ?>" class="lazyOwl img-responsive wp-post-image" alt="Nike Air Maestro II LTD Hyper Jade AH8511-100 01" /></div>
                                            </a>
                                        </div>
                                        <div class="sneaker-info">
                                            <div class="sneaker-title">
                                                <h2><a href="{{url('/')}}/testproduct/<?php echo $key->product_id ?>">{{$key->product_name}}</a></h2>
                                            </div>
                                            <div class="sneaker-price">
                                                <p>&pound; {{$key->product_price}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                   <?php
                    }
                    ?>
                                <!-- individual product card -->

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- two banner welcome -->
        <div class="middle-banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 middle-banner">
<?php 
              $banner = DB::table('banners')
              ->get();
              foreach($banner as $key){
              ?>
                        <div class="col-sm-6 margin-padding-0 wow fadeInLeft" data-wow-delay="0.25s">
                            <a href="http://bit.ly/2Hg3I30" target="_blank"><img
src="http://localhost/upwork03/img/<?php echo $key->banner_image ?>" class="img-responsive" alt="Nike"></a></div>
   <?php
            }
            ?>

                       
                    </div>
                </div>
            </div>
        </div>
        <script>
            //id -> content id
            // limit-> no of data
            //tabid content id
            function get_carousel(id, limit, tabid) {
                var newajaxurl = 'http://localhost/upwork03/index.php/comingsoontest';
                jQuery.ajax({
                    type: "GET",
                    url: newajaxurl,
                    data: "termid=" + id + "&limit=" + limit,
                    success: function(response) {
                        console.log(response);
//send response with html,css
console.log(response.length);
var temp='<div class="instock owl-carousel">',count;
for(count=0;count<response.length;count++){
    temp=temp+'<div><article id="post-35676" class="post-35676 sneaker type-sneaker status-publish has-post-thumbnail department-nikes colour-white status-in-stock status-on-focus"><div class="single-sneaker jj"><div class="row col-md-12 margin-padding-0"><div class="col-md-12  margin-padding-0"><div class="sneaker-status align-centre"><p><span class="stockist_in_stock">'+response[count].status+'</span></p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-padding-0 text-responsive"><div class="release-date"><p>'+response[count].product_release_date+'</p></div></div></div><div class="ih-item square colored effect6 bottom_to_top"><a href="http://localhost/upworkcopy/index.php/testproduct/'+response[count].product_id+'"><div class="img"><img width="350" height="220" src="http://localhost/upwork03/img/'+ response[count].image_name+'" class="lazyOwl img-responsive wp-post-image" alt="Nike Air More Uptempo GS White 415082-106 01" /></div></a></div><div class="sneaker-info"><div class="sneaker-title"><h2><a href="http://localhost/upworkcopy/index.php/testproduct/'+response[count].product_id+'">'+response[count].product_name+'</a></h2></div><div class="sneaker-price"><p>&pound; '+response[count].product_price+'</p></div></div></div></article></div>';

}
temp=temp+'</div>'
                        jQuery('#' + tabid + '').html(temp);
                        jQuery('#' + tabid + '-collapse').html('<div class="panel-body js-tabcollapse-panel-body">' + temp + '</div>');

                        jQuery('.instock').owlCarousel({
                            responsive: {
                                0: {
                                    items: 1
                                },
                                480: {
                                    items: 1
                                },
                                768: {
                                    items: 2
                                },
                                992: {
                                    items: 4,
                                }
                            },
                            loop: true,
                            margin: 0,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            stopOnHover: true,
                            nav: true,
                            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                            autoplayHoverPause: true,
                            autoplaySpeed: 1000

                        });
                        return true;
                    },
                    beforeSend: function() {
                        //loader
                        jQuery('#' + tabid + '').html('<div class="loading-wrap" style="display:table; width:100%; text-align:center; height:350px;"><div class="loading" style="display:table-cell; vertical-align:middle;height:450px;width:100%;"><img src="http://localhost/upwork03/img/ajax-loader.gif" alt="loading" /></div></div>');
                        jQuery('#' + tabid + '-collapse').html('<div class="panel-body js-tabcollapse-panel-body"><div class="loading-wrap" style="display:table; width:100%; text-align:center; height:350px;"><div class="loading" style="display:table-cell; vertical-align:middle;height:350px;width:100%;"><img src="http://localhost/upwork03/img/ajax-loader.gif" alt="loading" /></div></div></div>');


                    }
                });
            }

        </script>
        <div class="releases-section wow fadeInDown" data-wow-delay="0.25s">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="exTab3" class="container">
                            <div class="row">
                                <div class="col-md-2 margin-padding-0">
                                    <div class="brand">
                                        <img src="http://localhost/upwork03/img/shoe_icon.png" class="img-responsive" alt="">
                                        <h3> RELEASES</h3>
                                    </div>
                                </div>
                                <div class="col-md-10 margin-padding-0">
                                    <ul class="nav nav-tabs releases-sidebar-tabs sidebar-tabs" id="sidebar" role="tablist">
                                        <li class="active">
                                            <a href="#instock" onclick="get_carousel('In Stock','40','instock')" data-toggle="tab">Instock</a></li>
                                        <li>
                                            <a href="#comingsoon" onclick="get_carousel('Coming Soon','40','comingsoon')" data-toggle="tab">Coming soon</a></li>
                                        
                                        <li>
                                            <a href="#delayed" onclick="get_carousel('Out of Stock','40','delayed')" data-toggle="tab">Out of Stock</a></li>
                                            <li>
                                            <a href="#recentrelease" onclick="get_carousel('Recent Release','40','recentrelease')" data-toggle="tab">Recent Release</a></li>
                                    </ul>
                                    <div class="border-red margin-right-30"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-12 margin-padding-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="instock">
                                    <div class="instock owl-carousel">
                                         <?php 
                        $recentreleaseproducts = DB::table('products')
                       ->join('images', 'products.product_id', '=', 'images.product_id')
                       ->join('status', 'products.product_status', '=', 'status.status_id')
                       ->where('images.image_feature', '=', 1)
                       ->where('status.status', '=', 'In Stock')
                       ->get();
                       foreach($recentreleaseproducts as $key){
                      ?>
                                        <div>
                                            <article id="post-35676" class="post-35676 sneaker type-sneaker status-publish has-post-thumbnail department-nikes colour-white status-in-stock status-on-focus">
                                                <div class="single-sneaker jj">
                                                    <div class="row col-md-12 margin-padding-0">
                                                        <div class="col-md-12  margin-padding-0">
                                                            <div class="sneaker-status align-centre">
                                                                <p><span class="stockist_in_stock">In Stock</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-padding-0 text-responsive">
                                                            <div class="release-date">
                                                                <p>{{$key->product_release_date}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ih-item square colored effect6 bottom_to_top">
                                                        <a href="{{url('/')}}/testproduct/<?php echo $key->product_id ?>">
                                                            <div class="img"><img width="350" height="220" src="http://localhost/upwork03/img/<?php echo $key->image_name ?>" class="lazyOwl img-responsive wp-post-image" alt="Nike Air More Uptempo GS White 415082-106 01" /></div>
                                                        </a>
                                                    </div>
                                                    <div class="sneaker-info">
                                                        <div class="sneaker-title">
                                                            <h2><a href="{{url('/')}}/testproduct/<?php echo $key->product_id ?>">{{$key->product_name}}</a></h2>
                                                        </div>
                                                        <div class="sneaker-price">
                                                            <p>&pound; {{$key->product_price}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                           
                                        </div>
                                           <?php
                    }
                    ?>
                                    </div>
                                    <div class="releases-view-all">
                                        <a href="{{url('/')}}/testreleases"><i
class="fa fa-eye" aria-hidden="true"></i> View All </a></div>
                                </div>
                                <div class="tab-pane" id="comingsoon"></div>
                                <!-- <div class="tab-pane" id="instock"></div> -->
                                <div class="tab-pane" id="delayed"></div>
                                <div class="tab-pane" id="recentrelease"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>

            //jquery for brands
            function get_carouselbrand(id, limit, tabid) {
                var newajaxurl = 'http://localhost/upwork03/index.php/welcomebrandtest';
                jQuery.ajax({
                    type: "GET",
                    url: newajaxurl,
                    data: "termid=" + id + "&limit=" + limit,
                    success: function(response) {
                        // console.log(response);
                        var temp='<div class="nike owl-carousel"><div>',count;
                    for(count=0;count<response.length;count++){
                        temp=temp+'<article id="post-35268" class="post-35268 sneaker type-sneaker status-publish has-post-thumbnail department-adidas colour-black colour-white status-in-stock status-on-focus"><div class="single-sneaker jj"><div class="row col-md-12 margin-padding-0"><div class="col-md-12  margin-padding-0"><div class="sneaker-status align-centre"><p><span class="stockist_in_stock">'+response[count].status+'</span></p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-padding-0 text-responsive"><div class="release-date"><p>'+response[count].product_release_date+'</p></div></div></div><div class="ih-item square colored effect6 bottom_to_top"><a href="http://localhost/upworkcopy/index.php/testproduct/'+response[count].product_id+'"><div class="img"><img width="350" height="220" src="http://localhost/upwork03/public/img/'+response[count].image_name+'" class="lazyOwl img-responsive wp-post-image" alt="adidas Alexander Wang Run Black White AQ1230 01" /></div></a></div><div class="sneaker-info"><div class="sneaker-title"><h2><a href="http://localhost/upworkcopy/index.php/testproduct/'+<?php echo $key->product_id ?>+'">'+response[count].product_name+'</a></h2></div><div class="sneaker-price"><p>&pound; '+response[count].product_price+'</p></div></div></div></article>';

                    }
                    temp=temp+'</div></div>'
                        jQuery('#' + tabid + '').html(temp);
                        jQuery('#' + tabid + '-collapse').html(temp);
                        jQuery('.nike').owlCarousel({
                            responsive: {
                                0: {
                                    items: 1
                                },
                                480: {
                                    items: 1
                                },
                                768: {
                                    items: 2
                                },
                                992: {
                                    items: 4,
                                }
                            },
                            loop: true,
                            margin: 0,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            stopOnHover: true,
                            nav: true,
                            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                            autoplayHoverPause: true,
                            autoplaySpeed: 1000

                        });
                        return true;
                    },
                    beforeSend: function() {
                        jQuery('#' + tabid + '').html('<div class="loading-wrap" style="display:table; width:100%; text-align:center; height:350px;"><div class="loading" style="display:table-cell; vertical-align:middle;height:450px;width:100%;"><img src="http://localhost/upwork03/img/ajax-loader.gif" alt="loading" /></div></div>');
                        jQuery('#' + tabid + '-collapse').html('<div class="panel-body js-tabcollapse-panel-body"><div class="loading-wrap" style="display:table; width:100%; text-align:center; height:350px;"><div class="loading" style="display:table-cell; vertical-align:middle;height:350px;width:100%;"><img src="http://localhost/upwork03/img/ajax-loader.gif" alt="loading" /></div></div></div>');
                    }
                });
            }

        </script>
       <div class="releases-section brand-sec wow fadeInDown" data-wow-delay="0.25s">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="exTab3" class="container">
                            <div class="row">
                                <div class="col-md-2 margin-padding-0">
                                    <div class="brand">
                                        <img src="img/shoe_icon.png" class="img-responsive" alt="">
                                        <h3>BRANDS</h3>
                                        <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-md-10 margin-padding-0">
                                    <ul class="nav nav-tabs brands-sidebar-tabs sidebar-tabs" id="sidebar" role="tablist">
                                        <li class="active">
                                            <a href="#puma" onclick="get_carouselbrand('Puma','40','puma')" data-toggle="tab">Puma</a></li>
                                        <li>
                                            <a href="#nikejordan" onclick="get_carouselbrand('Nike Jordan','40','nikejordan')" data-toggle="tab">Nike Jordan</a></li>
                                        <!-- <li>
                                            <a href="#jordan" onclick="get_carouselbrand('46','40','jordan')" data-toggle="tab">Jordan</a></li>
                                        <li>
                                            <a href="#nmd" onclick="get_carouselbrand('149','40','nmd')" data-toggle="tab">NMD</a></li>
                                        <li>
                                            <a href="#eqt" onclick="get_carouselbrand('622','40','eqt')" data-toggle="tab">Air Max</a></li> -->
                                    </ul>
                                    <div class="border-red margin-right-30"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3 margin-padding-0 brands-tab-left-banner">
                            <a href="" target="_blank"><img
src="img/SNS-adidas-OFF.jpg" class="img-responsive" alt="sns"></a></div>
                        <div class="col-md-9 margin-padding-0">
                            <div class="tab-content ">
                                <div class="tab-pane active " id="puma">
                                    <div class="nike owl-carousel">
                                        <?php
                                         $adidasproducts = DB::table('products')
                                           ->join('images', 'products.product_id', '=', 'images.product_id')
                                           ->join('status', 'products.product_status', '=', 'status.status_id')
                                           ->where('images.image_feature', '=', 1)
                                           ->where('products.product_brand', '=', 'Puma')
                                           ->limit(2)
                                           ->get();
                                           foreach($adidasproducts as $key){

                                        ?>

                                        <div>
                                            <article id="post-35268" class="post-35268 sneaker type-sneaker status-publish has-post-thumbnail department-adidas colour-black colour-white status-in-stock status-on-focus">
                                                <div class="single-sneaker jj">
                                                    <div class="row col-md-12 margin-padding-0">
                                                        <div class="col-md-12  margin-padding-0">
                                                            <div class="sneaker-status align-centre">
                                                                <p><span class="stockist_in_stock">{{$key->status}}</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-padding-0 text-responsive">
                                                            <div class="release-date">
                                                                <p>{{$key->product_release_date}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ih-item square colored effect6 bottom_to_top">
                                                        <a href="{{url('/')}}/testproduct/<?php echo $key->product_id ?>">
                                                            <div class="img"><img width="350" height="220" src="http://localhost/upwork03/public/img/<?php echo $key->image_name ?>" class="lazyOwl img-responsive wp-post-image" alt="adidas Alexander Wang Run Black White AQ1230 01" /></div>
                                                        </a>
                                                    </div>
                                                    <div class="sneaker-info">
                                                        <div class="sneaker-title">
                                                            <h2><a href="{{url('/')}}/testproduct/<?php echo $key->product_id ?>">{{$key->product_name}}</a></h2>
                                                        </div>
                                                        <div class="sneaker-price">
                                                            <p>&pound; {{$key->product_price}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                             <article id="post-35268" class="post-35268 sneaker type-sneaker status-publish has-post-thumbnail department-adidas colour-black colour-white status-in-stock status-on-focus">
                                                <div class="single-sneaker jj">
                                                    <div class="row col-md-12 margin-padding-0">
                                                        <div class="col-md-12  margin-padding-0">
                                                            <div class="sneaker-status align-centre">
                                                                <p><span class="stockist_in_stock">{{$key->status}}</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-padding-0 text-responsive">
                                                            <div class="release-date">
                                                                <p>{{$key->product_release_date}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ih-item square colored effect6 bottom_to_top">
                                                        <a href="{{url('/')}}/testproduct/<?php echo $key->product_id ?>">
                                                            <div class="img"><img width="350" height="220" src="http://localhost/upwork03/public/img/<?php echo $key->image_name ?>" class="lazyOwl img-responsive wp-post-image" alt="adidas Alexander Wang Run Black White AQ1230 01" /></div>
                                                        </a>
                                                    </div>
                                                    <div class="sneaker-info">
                                                        <div class="sneaker-title">
                                                            <h2><a href="{{url('/')}}/testproduct/<?php echo $key->product_id ?>">{{$key->product_name}}</a></h2>
                                                        </div>
                                                        <div class="sneaker-price">
                                                            <p>&pound; {{$key->product_price}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <?php 
                                    }
                                        ?>
                                    </div>
                                    <div class="releases-view-all">
                                        <a href="{{url('/')}}/testreleases"><i
class="fa fa-eye" aria-hidden="true"></i> View All</a></div>
                                </div>
                                <div class="tab-pane" id="nikejordan"></div>
                                <!-- <div class="tab-pane" id="nikejordan"></div> -->
                                <!-- <div class="tab-pane" id="nmd"></div>
                                <div class="tab-pane" id="eqt"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-section wow fadeInDown" data-wow-delay="0.25s">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 news-header">
                        <div class="col-xs-6 news-header-left">
                            <h3><i class="fa fa-lightbulb-o" aria-hidden="true"></i> &nbsp; NEWS</h3>
                        </div>
                        <div class="col-xs-6 news-header-right">
                            <h4><a href="{{url('/')}}/testnewscatalogue"><i
class="fa fa-eye" aria-hidden="true"></i>&nbsp; View All</a></h4>
                        </div>
                    </div>
                </div>
                <div class="row news">
                    <div class="col-md-12 margin-padding-0">
                        <?php 
      $adidasproducts = DB::table('news')
      ->join('news_image', 'news.news_id', '=', 'news_image.news_id')
      ->where('news_image.news_image_feature', '=', 1)
      ->orderBy('news.news_date','DESC')
      ->limit(4)
      ->get();
      foreach($adidasproducts as $key){
        $date=$key->news_date;
        $dt=explode(" ", $date);
        $dt=explode("-", $dt[0]);
        // echo $dt[2]." ";
        $month= date("F", strtotime($date));
        $result = substr($month, 0, 3);
        // echo $result;
    ?>
                        <div class="col-sm-6 single-news margin-padding-0 border-right border-bottom">
                            <div class="col-md-6 margin-padding-0">
                                <div class="news-img">
                                    <a href="{{url('/')}}/newsSingle/<?php echo  $key->news_id ?>"><img
width="440" height="327" src="http://localhost/upwork03/img/<?php echo $key->news_image_name ?>" class="img-responsive wp-post-image" alt="adidas Joins Forces Alexander Wang For Three New Sneakers" /></a></div>
                                <div class="news-date">
                                    <p>{{$result}}<?php echo "<br>"?>{{$dt[2]}}</p>
                                </div>
                            </div>
                            <div class="col-md-6 margin-padding-0 news-title ">
                                <h2><a href="{{url('/')}}/newsSingle/<?php echo  $key->news_id ?>">adidas Joins Forces Alexander Wang For Three New Sneakers</a></h2>
                                <div class="news-info">
                                    Posted In &colon; <a href="#" rel="category tag">Official Look</a></div>
                                <div class="news-text">
                                    <p>Alexander Wang stormed the sneaker world by unveiling the first Season 3 collection back in April with adidas Originals. And
                                        <div class='read-more'>
                                            <p> <a href="{{url('/')}}/newsSingle/<?php echo  $key->news_id ?>">Read more</a></p>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
       
                       <?php
  }
  ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="sign-up-section wow fadeInDown" data-wow-delay="0.25s">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 sign-up">
                        <h2>SIGN UP BELOW FOR EARLY UPDATES</h2>
                        <p>Subscribe us to stay updated about new releases</p>
                        <div class="sign-up-input">
                            <form action="{{url('/')}}/subscription" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                 {{csrf_field() }}
                                <input type="email" value="" name="email" class="email" id="mce-EMAIL" placeholder=" Enter your email " required>
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_06f3dde38a5eb2f741a1aa8e1_76684f5715" tabindex="-1" value=""></div>
                                <div class="sign-up-icon"><button class="btn btn-default" name="subscribe" id="mc-embedded-subscribe" type="submit"><i
class="fa fa-paper-plane" aria-hidden="true"></i></button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top wow fadeInDown" data-wow-delay="0.25s">
            <div class="container footer-contant">
                <div class="row">
                    <div class="footer-menu">
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <h2>Departments</h2>
                                <div class="menu-brands-container">
                                    <ul id="menu-brands" class="menu">
                                        <li id="menu-item-27500" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-27500"><a href="#">Adidas</a></li>
                                        <li id="menu-item-27501" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-27501"><a href="#">Nike</a></li>
                                        <li id="menu-item-27510" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-27510"><a href="#">Puma</a></li>
                                        <li id="menu-item-27511" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-27511"><a href="#">Reebok</a></li>
                                        <li id="menu-item-27512" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-27512"><a href="#">Saucony</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <h2>Quick Links</h2>
                                <div class="menu-quick-links-container">
                                    <ul id="menu-quick-links" class="menu">
                                        <li id="menu-item-6378" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-6378"><a href="#">EQT</a></li>
                                        <li id="menu-item-6379" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-6379"><a href="#">Yeezy</a></li>
                                        <li id="menu-item-6380" class="menu-item menu-item-type-taxonomy menu-item-object-status menu-item-6380"><a href="#">In stock</a></li>
                                        <li id="menu-item-27789" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27789"><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <h2>News</h2>
                                <div class="menu-news-category-container">
                                    <ul id="menu-news-category" class="menu">
                                        <li id="menu-item-6200" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6200"><a href="#">Upcoming</a></li>
                                        <li id="menu-item-6199" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6199"><a href="#">On foot images</a></li>
                                        <li id="menu-item-6197" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6197"><a href="#">Closer Look</a></li>
                                        <li id="menu-item-6198" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6198"><a href="#">First Look</a></li>
                                        <li id="menu-item-6219" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6219"><a href="#">Weekly release</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="footer-logo"><a href="#"><img
src="http://localhost/upwork03/img/footer-logo.png" class="img-responsive" alt=""></a></div>
                            <div class="footer-text">
                                <p> <span id="snippeThe European portal for all kind of sneaker and fashion related release and news update with confirmed stock list of released and upcoming products.t_title" class="title"><strong>earthrayman.co.uk</strong> is a web portal for UK and Europe Sneaker News &amp; Release Updates with confirmed stock list of released and upcoming products. We will provide you with the information of the popular brands and series such Nike, adidas, NMD, Yeezy, ASICS, PUMA, Reebok, Balenciaga, Valentino and much more. Our dedicated team works hard to bring you the latest images, both off and on foot so that you can have a clear view of what you are purchasing. Stay connected and never miss a thing. </span></p>
                            </div>
                            <div class="footer-social-icons">
                                <ul>
                                    <li><a href="#"><i
class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" target="_blank"><i
class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" target="_blank"><i
class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright&nbsp;<a href="#">Earth Rayman</a> 2018&nbsp; &#124; &nbsp; All Rights Reserved &nbsp; &#124; &nbsp;Company Reg No. 10812528 &nbsp; &#124; &nbsp;<a href="#">Impressum</a></p>
                    </div>
                </div>
            </div>
            <div class="totop"><i class="fa fa-angle-up"></i></div>
        </div>
        <div class="mobile_social_icons">
            <ul>
                <li><a href="#" target="_blank"><i
class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" target="_blank"><i
class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" target="_blank"><i
class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    <script type='text/javascript' src='http://localhost/upwork03/jsC/scripts.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsC/postratings-js.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsC/plugins.js?ver=4.9.5'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsC/main.js'></script>

</body>

</html>
