<!doctype html>
<html lang="en-GB">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="http://localhost/upwork03/img/fav-icon.png" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="http://localhost/upwork03/cssR/36d7a.css" media="all" />
    <title>Sneakers &#8211; Fastsole</title>


    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

    </style>
    <script type='text/javascript' src='http://localhost/upwork03/jsR/jquery.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsR/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsR/addtoany.min.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsR/jquery.min.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsR/initslider-1.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsR/scripts.js'></script>

</head>

<body data-rsssl=1 class="archive post-type-archive post-type-archive-sneaker">

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
    <div class="left-side-menu"><a class="close-sidenav"><i
class="fa fa-close" aria-hidden="true"></i></a><a href="#" class="sidenav-logo"><img
src="img/footer-logo.png" alt="Fastsole"></a>
        <div class="menu-departments-container">
            <ul id="menu-departments" class="sidenav-menu">
                <li id="menu-item-6191" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-6191"><a href="#">Nike</a></li>
                <li id="menu-item-6189" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-6189"><a href="#">Adidas</a></li>
                <li id="menu-item-6207" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-6207"><a href="#">Nike Jordan</a></li>
                <li id="menu-item-6209" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-6209"><a href="#">NMD</a></li>
                <li id="menu-item-27480" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-27480"><a href="#">EQT</a></li>
                <li id="menu-item-27481" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-27481"><a href="#">Yeezy</a></li>
                <li id="menu-item-27483" class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-27483"><a href="#">Puma</a></li>
            </ul>
        </div>
    </div>
    <div class="right-side-menu"><a class="close-sidenav"><i
class="fa fa-close" aria-hidden="true"></i></a><a href="#" class="sidenav-logo"><img
src="img/footer-logo.png" alt="Fastsole"></a>
        <div class="menu-main-menu-container">
           <ul id="menu-main-menu" class="sidenav-menu">
                <li id="menu-item-236" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-222 current_page_item menu-item-236"><a href="{{url('/')}}">Home</a></li>
                <li id="menu-item-27473" class="current-menu-item menu-item-type-custom menu-item-object-custom menu-item-27473"><a href="{{url('/')}}/testreleases">Releases</a></li>
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

                        </div>
                        <div class="col-xs-6">
                            <div class="mobile-menu-logo"><a href="#"><img
src="img/logo.png" alt="Fastsole"></a></div>
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
        <div class="header-section wow fadeInDown" data-wow-delay="0.25s">
            <div class="header-top ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 site-logo">
                            <div class="logo"><a href="#"><img
src="http://localhost/upwork03/img/logo.png" class="img-responsive" alt="Fastsole"></a></div>
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
                                <li><a href="#" target="_blank"><i
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
            <div class="header-bottom-wrapper">
                <div class="header-bottom inner-page-header-bottom" id="sticky-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bg-white clearfix">
                                    <div class="sticky-logo-col"><a href="#/"><img
src="img/logo.png" class="img-responsive" alt="Fastsole"></a></div>
                                    <div class="header-middle sticky-menus-col">
                                        <div id="main-nav" class="stellarnav">
                                                 <ul id="menu-main-menu-1" class="menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-222 current_page_item menu-item-236"><a href="{{url('/')}}">Home</a></li>
                                            <li class="current-menu-item menu-item-type-custom menu-item-object-custom menu-item-27473"><a href="{{url('/')}}/testreleases">Releases</a></li>
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
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="header-social-button sticky-social-col">
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

        <div class="container wow fadeInDown" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                        <span property="itemListElement" typeof="ListItem"><a
property="item" typeof="WebPage" title="Go to Home." href="{{url('/')}}" class="home"><span
property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span> &gt; <span property="itemListElement" typeof="ListItem"><span
property="name">Sneakers</span>
                        <meta property="position" content="2">
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row bg-white margin-padding-0 wow fadeInDown newrelativeforloader" data-wow-delay="0.75s">
                <form  id="filter">
                    <div class="col-md-3 col-sm-12">
                        <div class="release-filters">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOned">
                                        <h4 class="panel-title">
                                            <a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOned" aria-expanded="false" aria-controls="collapseOned">
Release Calendar
</a></h4>
                                    </div>
                                    <div id="collapseOned" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOned">
                                        <div class="panel-body calenderIcon">
                                            <i class="fa fa-calendar glyphicon glyphicon-calendar"></i>
                                            <input type="text" name="daterange" value="" id="daterangecheckid" />
                                            <input type="button" value="Clear" id="daterangeclear"></div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
Stock
</a></h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <ul class="left_sidebar_field">
                                                <li><input type="checkbox" name="status[0]" value="Coming Soon" />Coming Soon</li>
                                                <li><input type="checkbox" name="status[1]" value="In Stock" />In stock</li>
                                                <li><input type="checkbox" name="status[2]" value="Stock Out" />Sold Out</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
Brand
</a></h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <ul class="left_sidebar_field">

                                                                 <?php
                                                                                              $brands = DB::table('brands')  ->get();
                                                                                              $count=0;
                                                                                  foreach ($brands as $key ) {
                                                                                              ?>    
                                                                                
                                                                                
                                                                     
                                                                    <li><input type="checkbox" name="vehicle[]" value="<?php echo $key->brand_name ?>" />{{$key->brand_name}}</li>
                                                                      
                                                                    <?php }
                                                                                 ?>

                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                    
                        
                            </div><input type="button" class="reset_button" value="Reset" id="resetbutton"></div>
                    </div>
                    <div class="col-md-9 col-sm-12 asaSa ">
                        <div class="release-slider">
                            <div class="nivoSlider" id="release-slider">
                                <a href=""><img
src="http://localhost/upwork03/img/sneaker_slider_1.jpg" class="img-responsive" alt="sneaker slider 1"></a>
                                <a href=""><img
src="http://localhost/upwork03/img/sneaker_slider_2.jpg" class="img-responsive" alt="sneaker slider 2"></a>
                                <a href=""><img
src="http://localhost/upwork03/img/sneaker_slider_3.jpg" class="img-responsive" alt="sneaker slider 3"></a>
</div>
                        </div>
                        <div class="release-header">
                            <h1> ALL SNEAKERS</h1>
                            <div class="sorting_section"><select name="sf_price1"><option
value="" disabled selected hidden>Sort By</option><option
value="ASC">Price low to high</option><option
value="DESC">Price high to low</option><option
value="date_desc">Order By Release Date(DESC)</option><option
value="release_week">Release this week</option></select></div><button style="display: none">Apply filter</button>
                            <input type="hidden" style="display: none" name="action" value="myfilter"></div>
                        <div class="border-red"></div>
                        <div class="release-body">
                            <div id="response">
                                 <?php 
                              foreach($allsneakers as $key){
                              ?>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 margin-padding-0 testdata wow fadeInDown" data-wow-delay="0.3s">
                                    <article id="post-35756" class="post-35756 sneaker type-sneaker status-publish has-post-thumbnail department-air-max department-nikes colour-black status-in-stock status-on-focus">
                                        <div class="single-sneaker jj">
                                            <div class="row col-md-12 margin-padding-0">
                                                <div class="col-md-12  margin-padding-0">
                                                    <div class="sneaker-status align-centre">
                                                        <p><span class="stockist_in_stock"><?php echo $key->status ?></span></p>
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
                                                    <div class="img"><img width="350" height="220" src="http://localhost/upworkcopy/img/<?php echo $key->image_name ?>" class="lazyOwl img-responsive wp-post-image" alt="Nike Air Max 270 Camo Heel AQ6239-001 01" /></div>
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
                            
                        </div>
                    </div>
                    <div id="wait2d">
                        <img src="http://localhost/upwork03/img/loading.gif" alt="" /></div>
                </form>
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
                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder=" Enter your email " required>
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
src="img/footer-logo.png" class="img-responsive" alt="Fastsole"></a></div>
                            <div class="footer-text">
                                <p> <span id="snippeThe European portal for all kind of sneaker and fashion related release and news update with confirmed stock list of released and upcoming products.t_title" class="title"><strong>FastSole.co.uk</strong> is a web portal for UK and Europe Sneaker News &amp; Release Updates with confirmed stock list of released and upcoming products. We will provide you with the information of the popular brands and series such Nike, adidas, NMD, Yeezy, ASICS, PUMA, Reebok, Balenciaga, Valentino and much more. Our dedicated team works hard to bring you the latest images, both off and on foot so that you can have a clear view of what you are purchasing. Stay connected and never miss a thing. </span></p>
                            </div>
                            <div class="footer-social-icons">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright&nbsp;<a href="#">Fastsole</a> 2018&nbsp; &#124; &nbsp; All Rights Reserved &nbsp; &#124; &nbsp;Company Reg No. 10812528 &nbsp; &#124; &nbsp;<a href="#">Impressum</a></p>
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
    <script type='text/javascript' src='http://localhost/upwork03/jsR/scripts.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsR/postratings-js.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsR/plugins.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsR/main.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsR/myloadmore.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsR/wp-embed.min.js'></script>
        <script type="text/javascript">
             $(document).ready(function(){
               
                        $( "input[type=checkbox]" ).on( "click", function(e){
                                    var searchIDs = $(" input:checkbox:checked").map(function(){
                                            return $(this).val();
                                          }).get(); 
                                   
                                   
                                           $.ajax({
                                                  url: "{{url('/')}}/test",
                                                  type: "get",
                                                  data: {id:searchIDs},
                //                                    beforeSend: function() {

                //     jQuery("#wait2d").css("display", "block","background","transparent");

                // },

                                                   success: function(response){ // What to do if we succeed
                                                    var temp='',count;
                                                    $('#revolution').empty();
                                                    for(count=0;count<response.length;count++){
                                                      temp=temp+' <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 margin-padding-0 testdata wow fadeInDown" data-wow-delay="0.3s"><article id="post-35756" class="post-35756 sneaker type-sneaker status-publish has-post-thumbnail department-air-max department-nikes colour-black status-in-stock status-on-focus"><div class="single-sneaker jj"><div class="row col-md-12 margin-padding-0"><div class="col-md-12  margin-padding-0"><div class="sneaker-status align-centre"><p><span class="stockist_in_stock">'+response[count].status+'</span></p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-padding-0 text-responsive"><div class="release-date"><p>'+response[count].product_release_date+'</p></div></div></div><div class="ih-item square colored effect6 bottom_to_top"><a href="http://localhost/upwork03/index.php/product/'+response[count].product_id+'"><div class="img"><img width="350" height="220" src="http://localhost/upwork03/img/'+response[count].image_name+'" alt="Card image cap"><div class="mask flex-center"></div></a></div><div class="card-body pb-0"><p class="card-text text-left text-truncate"  tabindex="0" onclick="popover()" data-container="body" data-toggle="popover"  data-placement="top" style="cursor: help; " data-content="'+response[count].image_name+'" class="lazyOwl img-responsive wp-post-image" alt="Nike Air Max 270 Camo Heel AQ6239-001 01" /></div></a></div><div class="sneaker-info"><div class="sneaker-title"><h2><a href="http://localhost/upwork03/index.php/product/'+response[count].product_id+'">'+response[count].product_name+'</a></h2></div><div class="sneaker-price"><p>&pound; '+response[count].product_price+'</p></div></div></div></article></div>';


                                                     

                                                      
                                                    }
                                                    
                                                    $('#response').html(temp);


                                                    // console.log(response);
                                                  
                                                // $('#revolution').html(response) 
                                              },
                                          error: function(response){
                                            console.log('Error'+response);
                                            }
                                                });
                                          
                                  } );

                        $( "#resetbutton" ).on( "click", function(e){
                              $( "input[type=checkbox]" ).prop('checked', false);

                               $.ajax({
                                                  url: "{{url('/')}}/resetSearch",
                                                  type: "get",
                                                 
                                                   success: function(response){ // What to do if we succeed
                                                         var temp='',count;
                                                    $('#revolution').empty();
                                                    for(count=0;count<response.length;count++){
                                                      temp=temp+' <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 margin-padding-0 testdata wow fadeInDown" data-wow-delay="0.3s"><article id="post-35756" class="post-35756 sneaker type-sneaker status-publish has-post-thumbnail department-air-max department-nikes colour-black status-in-stock status-on-focus"><div class="single-sneaker jj"><div class="row col-md-12 margin-padding-0"><div class="col-md-12  margin-padding-0"><div class="sneaker-status align-centre"><p><span class="stockist_in_stock">'+response[count].status+'</span></p></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-padding-0 text-responsive"><div class="release-date"><p>'+response[count].product_release_date+'</p></div></div></div><div class="ih-item square colored effect6 bottom_to_top"><a href="http://localhost/upwork03/index.php/product/'+response[count].product_id+'"><div class="img"><img width="350" height="220" src="http://localhost/upwork03/img/'+response[count].image_name+'" alt="Card image cap"><div class="mask flex-center"></div></a></div><div class="card-body pb-0"><p class="card-text text-left text-truncate"  tabindex="0" onclick="popover()" data-container="body" data-toggle="popover"  data-placement="top" style="cursor: help; " data-content="'+response[count].image_name+'" class="lazyOwl img-responsive wp-post-image" alt="Nike Air Max 270 Camo Heel AQ6239-001 01" /></div></a></div><div class="sneaker-info"><div class="sneaker-title"><h2><a href="http://localhost/upwork03/index.php/product/'+response[count].product_id+'">'+response[count].product_name+'</a></h2></div><div class="sneaker-price"><p>&pound; '+response[count].product_price+'</p></div></div></div></article></div>';


                                                     

                                                      
                                                    }
                                                    
                                                    $('#response').html(temp);
                                              },
                                          error: function(response){
                                            console.log('Error'+response);
                                            }
                                                });



                            });
             });
        function myFunction() {
            var element = document.getElementById("wpas-tax_status");
            document.getElementById("wpas-tax_colour").classList.remove("collaspe");
            document.getElementById("wpas-tax_department").classList.remove("collaspe");
            document.getElementById("wpas-meta__sf_price").classList.remove("collaspe");
            document.getElementById("wpas-tax_status").classList.toggle("collaspe");

        }

        function myFunction1() {
            var element = document.getElementById("wpas-tax_department");
            document.getElementById("wpas-tax_department").classList.toggle("collaspe");
            document.getElementById("wpas-tax_colour").classList.remove("collaspe");
            document.getElementById("wpas-tax_status").classList.remove("collaspe");
            document.getElementById("wpas-meta__sf_price").classList.remove("collaspe");
        }

        function myFunction2() {
            var element = document.getElementById("wpas-tax_colour");
            document.getElementById("wpas-tax_colour").classList.toggle("collaspe");
            document.getElementById("wpas-tax_department").classList.remove("collaspe");
            document.getElementById("wpas-tax_status").classList.remove("collaspe");
            document.getElementById("wpas-meta__sf_price").classList.remove("collaspe");
        }

        function myFunction3() {
            var element = document.getElementById("wpas-meta__sf_price");
            document.getElementById("wpas-meta__sf_price").classList.toggle("collaspe");
            document.getElementById("wpas-tax_department").classList.remove("collaspe");
            document.getElementById("wpas-tax_status").classList.remove("collaspe");
            document.getElementById("wpas-tax_colour").classList.remove("collaspe");
        }



        jQuery(function($) {
            $('#filter').change(function() {


                var filter = $('#filter');


                //alert(filter);

                $.ajax({
                    url: filter.attr('action'),

                    data: filter.serialize(), // form data

                    type: filter.attr('method'), // POST

                    dataType: 'json',

                   
                    success: function(data) {


                        misha_loadmore_params.current_page = 1;


                        misha_loadmore_params.posts = data.posts;


                        misha_loadmore_params.max_page = data.max_page;

                        filter.find('button').text('Apply filter'); // changing the button label back
                        $('#response').html(data.content); // insert data

                        if (data.max_page < 2) {
                            filter.find('button').text('Apply filter');
                        } else {
                            filter.find('button').text('Apply filter hide');
                        }
                    },
                    complete: function() {
                        jQuery("#wait2").fadeOut(1000);
                        jQuery("#wait2d").fadeOut(1000);



                    }
                });
                return false;
            });

        });




        function UpdateStatus() {
            var var1 = document.getElementById("btnn");
            var $loader = jQuery("#loader");

            var button = jQuery(this),
                data = {
                    'action': 'loadmore',
                    'query': misha_loadmore_params.posts,
                    'page': misha_loadmore_params.current_page
                };

            jQuery.ajax({

                url: misha_loadmore_params.ajaxurl,
                data: data,
                type: 'POST',
                beforeSend: function() {

                    jQuery("#wait").css("display", "block");

                },
                success: function(data) {
                    if (data) {

                        jQuery('.morepost').before(data);

                        misha_loadmore_params.current_page++;

                        if (misha_loadmore_params.current_page == misha_loadmore_params.max_page) {

                            jQuery('#btnn').hide();

                        }

                    } else {

                        jQuery('#btnn').hide();
                    }
                },
                complete: function() {
                    jQuery("#wait").fadeOut(1000);

                }
            });

            return false;
        }


        /*===================================collapsejs==============================*/
        /*===================================collapsejs==============================*/
        /*===================================collapsejs==============================*/

        jQuery(function($) {
            if (matchMedia) {
                var mq = window.matchMedia("(max-width: 992px)");
                mq.addListener(WidthChange);
                WidthChange(mq);
            }

            function WidthChange(mq) {
                if (mq.matches) {
                    $(".collapse").removeClass("in");
                    $(".collapsed").removeClass("kk");

                } else {
                    $(".collapse").addClass('in');
                    $(".collapsed").addClass('kk');

                }
            }
            $('a[data-toggle="collapse"]').click(function(e) {

                if ($(window).width() >= 992) {
                    e.stopPropagation();
                    return false;
                }
            });

        });
                /*===================================Include Date Range Picker==============================*/
        /*===================================Include Date Range Picker==============================*/
        /*===================================Include Date Range Picker==============================*/


        $(function() {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#daterangecheckid').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }


            $('#daterangecheckid').daterangepicker({
                autoUpdateInput: false,
                autoApply: true,
                alwaysShowCalendars: true,
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);


            $('#daterangecheckid').on('hide.daterangepicker', function(ev, picker) {
                $('#filter').trigger('change');
            });


            var abc = $('#daterangecheckid').data('daterangepicker');


            $('#daterangeclear').on('click', function(ev, picker) {

                $('#daterangecheckid').val('');

                abc.setStartDate(start);
                abc.setEndDate(end);

                $('#filter').trigger('change');

            });


        });

    </script>
</body>

</html>
