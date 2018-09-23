<!doctype html>
<html lang="en-GB">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="http://localhost/upwork03/img/fav-icon.png" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="http://localhost/upwork03/cssA/36d7a.css" media="all" />
    <title>Sneaker News &#8211; Fastsole</title>


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
    <script type='text/javascript' src='http://localhost/upwork03/jsA/jquery.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsA/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsA/addtoany.min.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsA/jquery.min.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsA/initslider-1.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsA/scripts.js'></script>

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
                <li id="menu-item-236" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-222 current_page_item menu-item-236"><a href="{{url('/')}}">Home</a></li>
                <li id="menu-item-27473" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27473"><a href="{{url('/')}}/testreleases">Releases</a></li>
                <li id="menu-item-27088" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27088"><a href="{{url('/')}}/testwintersale">Mid Season Deals</a></li>
                <li id="menu-item-234" class="current-menu-item menu-item-type-post_type menu-item-object-page menu-item-234"><a href="{{url('/')}}/testnewscatalogue">News</a></li>
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
src="img/logo.png" class="img-responsive" alt="Fastsole"></a></div>
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
                                    <div class="sticky-logo-col"><a href="#"><img
src="img/logo.png" class="img-responsive" alt="Fastsole"></a></div>
                                    <div class="header-middle sticky-menus-col">
                                        <div id="main-nav" class="stellarnav">
                                                 <ul id="menu-main-menu-1" class="menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-222 current_page_item menu-item-236"><a href="{{url('/')}}">Home</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27473"><a href="{{url('/')}}/testreleases">Releases</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27088"><a href="{{url('/')}}/testwintersale">Mid Season Deals</a></li>
                                            <li class="current-menu-item menu-item-type-post_type menu-item-object-page menu-item-234"><a href="{{url('/')}}/testnewscatalogue">News</a></li>
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




<!-- -------------------------------CONTENT STARTS-------------------------------------------------------------------------------------------------------------------- -->




        <div class="container wow fadeInDown" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                        <span property="itemListElement" typeof="ListItem"><a
property="item" typeof="WebPage" title="Go to Home." href="#" class="home"><span
property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span> &gt; <span property="itemListElement" typeof="ListItem"><span
property="name">Sneaker News UK | Latest Sneaker News Europe</span>
                        <meta property="position" content="2">
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row margin-padding-0">
                <?php 
       
        foreach($allnews as $key){
            $date=$key->news_date;
        $dt=explode(" ", $date);
        $dt=explode("-", $dt[0]);
        // echo $dt[2]." ";
        $month= date("F", strtotime($date));
        $result = substr($month, 0, 3);
        ?>
                <article id="post-35921" class="post-35921 post type-post status-publish format-standard has-post-thumbnail category-exclusive-release tag-adv tag-air-force tag-air-max tag-boost tag-nike-air-force tag-nike-air-max">
                    <div class="col-md-12 col-sm-12 cat-single-news margin-padding-0 bg-white wow fadeInDown" data-wow-delay="0.3s">
                        <div class="col-md-4 col-sm-6 col-xs-12 padding-left-0">
                            <div class="image_border">
                                <div class="article_image"><a href="{{url('/')}}/newsSingle/<?php echo  $key->news_id ?>"><img
width="370" height="240" src="http://localhost/upwork03/public/img/<?php echo $key->news_image_name ?>" class="img-responsive wp-post-image" alt="Get These 7Sneakers At JD Sports Now That Can Be Worn With Anything ft" /></a></div>
                            </div>
                            <div class="cat-news-date">
                                <p>{{$result}}<?php echo "<br>"?>{{$dt[2]}}</p>
                            </div>
                            <div class="news-social-share">
                                <ul>
                                    <li><a class="twitter" href="#"><i
class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a class="facebook" href="#"><i
class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a class="pinterest-p" href="#"><i
class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-xs-12 padding-right-0 cat-news-body">
                            <div class="news-heading">
                                <h2><a href="{{url('/')}}/newsSingle/<?php echo  $key->news_id ?>"><?php echo $key->news_title ?></a></h2>
                            </div>
                            <div class="news-info">
                                <div class="posted-in">
                                    <p>Posted In&colon; <a href="{{url('/')}}/newsSingle/<?php echo  $key->news_id ?>"><?php echo $key->news_source ?></a></p>
                                </div>
                                <div class="post-tag">
                                    <p><i class="fa fa-tags" aria-hidden="true"></i>Tags: <a href="{{url('/')}}/newsSingle/<?php echo  $key->news_id ?>" rel="tag"><?php echo $key->news_source ?></a></p>
                                </div>
                            </div>
                            <div class="news-body">
                                <p><?php echo $key->news_description ?>
                                    <div class='view-news'>
                                        <p> <a href="{{url('/')}}/newsSingle/<?php echo  $key->news_id ?>">View Details News <i
class="fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                <?php
        }
        ?>  
            </div>
        </div>
        <div class="container pagination-container wow fadeInDown" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-md-12">
                    <ul class="pagination news-pagination">
                        <li><span aria-current='page' class='page-numbers current'>1</span></li>
                        <li><a class='page-numbers' href="#">2</a></li>
                        <li><a class='page-numbers' href="#">3</a></li>
                        <li><span class="page-numbers dots">&hellip;</span></li>
                        <li><a class='page-numbers' href="#">77</a></li>
                        <li><a class="next page-numbers" href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container wow fadeInDown" data-wow-delay="0.25s">
            <div class="release-header bg-white">
                <h1>Popular News</h1>
            </div>
            <div class="border-red"></div>
            <div class="row news">
                <div class="col-md-12 margin-padding-0">
                    <?php 
        $allnews = DB::table('news')
        ->join('news_image', 'news.news_id', '=', 'news_image.news_id')
        ->where('news_image.news_image_feature', '=', 1)
        ->orderBy('news_date','DESC')
        ->limit(4)
        ->get();
        foreach($allnews as $key){
             $date=$key->news_date;
        $dt=explode(" ", $date);
        $dt=explode("-", $dt[0]);
        // echo $dt[2]." ";
        $month= date("F", strtotime($date));
        $result = substr($month, 0, 3);
        ?>
                    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 single-news margin-padding-0 border-right border-bottom">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 margin-padding-0">
                            <div class="news-img">
                                <a href="{{url('/')}}/newsSingle/<?php echo  $key->news_id ?>"><img
width="440" height="327" src="http://localhost/upwork03/public/img/<?php echo $key->news_image_name ?>" class="img-responsive wp-post-image" alt="Get These 7Sneakers At JD Sports Now That Can Be Worn With Anything ft" /></a></div>
                            <div class="news-date">
                                <p>{{$result}}<?php echo "<br>"?>{{$dt[2]}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 margin-padding-0 news-title ">
                            <h2><a href="{{url('/')}}/newsSingle/<?php echo  $key->news_id ?>"><?php echo $key->news_title ?></a></h2>
                            <div class="news-info">
                                Posted In &colon; <a href="{{url('/')}}/newsSingle/<?php echo  $key->news_id ?>"><?php echo $key->news_source ?></a></div>
                            <div class="news-text">
                                <p><?php //echo $key->news_description ?>
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
    <script type='text/javascript' src='http://localhost/upwork03/jsA/scripts.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsA/postratings-js.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsA/plugins.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsA/main.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsA/myloadmore.js'></script>
    <script type='text/javascript' src='http://localhost/upwork03/jsA/wp-embed.min.js'></script>


<!--      ===================================collapsejs==============================
        ===================================collapsejs==============================
        ===================================collapsejs==============================-->

    <script type="text/javascript">
        jQuery(function($) {
            if (matchMedia) {
                var mq = window.matchMedia("(max-width: 992px)");
                mq.addListener(WidthChange);
                WidthChange(mq);
            }

            function WidthChange(mq) {
                if (mq.matches) {
                    //$(".kk").attr("data-toggle","collapse");
                    $(".collapse").removeClass("in");
                    $(".collapsed").removeClass("kk");

                } else {
                    //$(".kk").attr("data-toggle","");
                    $(".collapse").addClass('in');
                    $(".collapsed").addClass('kk');

                }
            }
            $('a[data-toggle="collapse"]').click(function(e) {

                if ($(window).width() >= 992) {
                    //alert("hello");
                    e.stopPropagation();
                    return false;
                }
            });

        });

    </script>

</body>

</html>
