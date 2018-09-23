<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>:: Earth Rayman ::</title>

        <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/assets/owl.carousel.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/assets/owl.theme.default.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" >


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/owl.carousel.js"></script>
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->



        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> -->
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">



        <!-- JQuery -->
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>

       
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 -->
 <!-- Styles -->

        <style>


        html, body{
            background: #eaeaea none repeat scroll 0 0 !important;
            font-family: 'Roboto', sans-serif !important;
            position: relative !important;

        }

       
        #secondNav
        {
          background-color: #FFFFFF;
        }
        
        
         .nav-item{
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .nav-item li a{
          padding-left: 30px;
            padding-right: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .nav-item ul li:hover a{
  
  color: white ;
 
}
        .border-red {
    background: #ea2027 none repeat scroll 0 0;
    min-height: 3px;
}
          .border-offwhite {
           background: #E1E1E1 none repeat scroll 0 0;
           min-height: 2px;
            } 
         
        
      
       
        
        
        
     .label {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.label input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.label:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.label input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.label:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.label input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.label .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
       #pd{
        padding: 2.5%;
       }
       #footer
{
 /* width: 100%;
  height: 100%;*/
  background-color:#1C2331;
}
#wintersalecard 
{
  font-size: 18px; 
  white-space: nowrap;
   overflow: hidden; 
   width: 200px;
    text-overflow: ellipsis;
     float: none;
     cursor:help;


     
}
 /*#wintersalecard:hover
    {
        overflow: visible;
        color: #4CAF50;
        word-break: break-all;
      line-height: 1em; 


        

    }*/
 #releasenamecard
{
  font-size: 15px; 
  white-space: nowrap;
   overflow: hidden; 
   width: 150px;
    text-overflow: ellipsis;
     float: left; 

     
}
/*  #newsnamecard
{
  font-size: 15px; 
  white-space: nowrap;
   overflow: hidden; 
   width: 10%;
    text-overflow: ellipsis;
     float: left; 

     
}*/

    #subBut
{
  height: 44px;
  width: 5%;
}
.subscribe
{
  width: 100%;
  height: 300px;
  background-image:url("http://localhost/upwork1/public/img/subscribe.jpg");
}
#subDeg
{
  color: white; 
  text-align: center; 
  font-size: 20px; 
  padding-top: 60px;
  font-family: d;
}
.email
{
  width: 50%;
  height: 44px;
  background-color: transparent;
}
::placeholder {
    color: white;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: white;
}

::-ms-input-placeholder { /* Microsoft Edge */
   color: white;
}
#dealcardshadow
{
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
   border: 5px transparent;
   border-radius: 5px;

}
.brand-menu ul {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.brand-menu ul li:first-child {
    margin-top: 0;
}
.brand-menu ul li {
    border-bottom: 1px solid #e1e1e1;
    margin: 0;
        
}
.brand-menu ul li a {
    color: #555;
    display: block;
    font-weight: 400;
    padding: 2% 5%;
    text-decoration: none;
    font-size: 14px;
    line-height: 2;

}
.brand-menu ul li:first-child {
    margin-top: 0;
}
.brand-menu ul li:hover{
  
  background-color: red;
 
}
.brand-menu ul li:hover a{
  
  color: red;

 
}
.cat-all {
    bottom: 0;
    position: absolute;
}
.cat-all h4 {
    color: #777;
    font-weight: normal;
    margin-bottom: 0;

}
.brand-menu .cat-all h4 a{
    display: inline-flex;
}
.cat-all h4 a{
    background: #0e263e none repeat scroll 0 0;
    color: #fff;
    font-size: 13.5px;
    padding: 5% 91px 5% 12px;
    text-decoration: none;
}
.collapse ul li:hover{
  background-color: red;
}
@media all and (max-width:500px) {
  #firstnav{
          /*height: 160px;*/
         
        }
  .onlyforpc{
    display: none;
  }
}
@media all and (max-width:575px) {
  .mbqsr{
    padding-right: 0px !important;
  }
}
@media all and (min-width:576px) {
  #releasescale{
    height: 100%;
    width: 100%;
  }
}
@media all and (-webkit-min-device-pixel-ratio:0) and (min-resolution: .001dpcm) { 
 #releasescale{
    height: 50%;
    width: 100%;
  }

 }
 @media all and (max-width: 767px) {
    #bannerslider {display:none;}
    #welcomecarousel{margin-left: 20% !important;margin-right: 20% !important;margin-top: 5% !important;}
    .cat-all{}
    .brand-menu{text-align: center;}
    .brand-menu-col{
      padding-right: 15px !important;

    }
    
}
    ul.pagination li {
    display: inline;
    font-size: 12px;
    font-weight: bold;
}

ul.pagination li a {

    color: black;
    padding: 8px 8px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 4px;
}

ul.pagination li a.active {
    background-color: #4CAF50;
    padding: 8px 8px;
    margin: 4px;
    color: white;
    border: 1px solid #4CAF50;
}

ul.pagination li.active {
    /*background-color: #4CAF50;*/
    background-color: #687282;
    padding: 8px 8px;
    margin: 4px;
    color: white;
    border: 1px solid #4CAF50;
}

/*ul.pagination li a:hover:not(.active) {background-color: #ddd;}*/
ul.pagination li a:hover {background-color: #999999;}

ul.pagination li.disabled {
    /*background-color: #cccccc;*/
    color: #ddd;
    padding: 8px 8px;
    border: 1px solid #ddd;
    margin: 4px;
}


        </style>
         
    
    <link rel="stylesheet" type="text/css" href="http://localhost/upwork03/public/slider/sliderengine/amazingslider-1.css">
    <script src="http://localhost/upwork03/public/slider/sliderengine/amazingslider.js"></script>
      

   
      
    </head>
    <body >
      

      <!-- first nav -->
     <nav class="navbar navbar-light  justify-content-between" style="background-color: #FFFFFF;" id="firstnav">
  <a class="navbar-brand" style="font-family: Segoe UI; font-size: 30px;">Earthray Man.</a>
  <!-- box-shadow: 5px 5px 5px grey; -->

   <form class="form-inline" action="{{url('/')}}/randomSearchtest">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" name="randomSearch" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
</nav>
<div class="border-offwhite"></div>


<!-- 2nd nav -->

<div class="container"  style="    padding-right: 0px; padding-left: 0px;" >
<nav class="navbar navbar-expand-lg  navbar-light" id="secondNav" style="padding: 0px;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  
    <ul class="navbar-nav" >
      <li class="nav-item  " >
        <a class="nav-link"  href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}/testreleases">Releases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}/testwintersale">Mid Season Deals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}/testnewscatalogue">News </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Brands
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <?php
          $brnd=DB::table('brands')->limit(7)->get();
          foreach($brnd as $key){
          ?>
          <a class="dropdown-item" href="{{url('/')}}/testbrand/<?php echo $key->brand_name ?>">
            {{$key->brand_name}}
              
            </a>
          <?php 
           }
          ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}/testabout">About Us</a>
      </li>
    </ul>
  
  </div>
</nav>
<div class="border-red">
</div>
</div>

@extends('profile.productStatus')
@yield('content')

<div class="subscribe " id="subDeg">
<h2>SIGN UP BELOW FOR EARLY UPDATES</h2>
<p>Subscribe us to stay updated about new releases</p>

<form id="mc-embedded-subscribe-form" class="validate" action="{{url('/')}}/subscription" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
   {{csrf_field() }}
  <input type="EMAIL" name="email" class="email" placeholder="   Enter Your Email" type="email">
  
    <button id="subBut" class="btn btn-default" name="subscribe" type="submit">
      <i class="fa fa-paper-plane" aria-hidden="true"></i>
      </button>
    
  
</form>
  
</div>

<div class="border-red"></div>

<div id="footer" class="container-fluid"><!--correction for footer-->
<div class="container">
  <div class="row" style="padding-top: 5%;">
    <div class="col-sm">
     <ul style="color: white;">
      <h2 style="color: white;">Department</h2>
      <li>Adidas</li>
      <li>Nike</li>
      <li>Puma</li>
      <li>Reebok</li>
      <li>Saucony</li>
    </ul>
    </div>
    <div class="col-sm">
     <ul style="color: white;">
      <h2 style="color: white;">Quick Links</h2>
      <li>EQT</li>
      <li>Yeezy</li>
      <li>In Stock</li>
      <li>Contact Us</li>
    </ul>
    </div>
    <div class="col-sm">
      <ul style="color: white;">
      <h2 style="color: white;">News</h2>
      <li>Upcoming</li>
      <li>On foot images</li>
      <li>Closer look</li>
      <li>First Look</li>
      <li>Weekly release</li>
    </ul>
    </div>
    <div class="col-sm">
      
      <h2 style="color: white;">EarthRay Man</h2>
      <p style="color: white;">Earthray Man is a web portal for UK and Europe Sneaker News & Release Updates with confirmed stock list of released and upcoming products. We will provide you with the information of the popular brands and series such Nike, adidas, NMD, Yeezy, ASICS, PUMA, Reebok, Balenciaga, Valentino and much more.</p>
      
    </div>
  </div>
</div>
</div>

<div class="footer-copyright py-3 text-center" style="background-color:#161C27; color: #EAEAEA;">
        ©  Earthray Man 2018  |   All Rights Reserved   |  Company Reg No. ######## 
        
    </div>


    </body>
    
       
     

       <script type="text/javascript">
         function resolutioncheck(){
                    var width=screen.width;
                    console.log(screen.width);
                    if(width<=500){
                      var owl = $('.owl-carousel');
                      owl.owlCarousel({
                      items:2,
                      loop:true,
                      margin:5,
                      autoplay:true,
                      autoplayTimeout:1500,
                      autoplayHoverPause:true
                      
                  });

                    }
                    else if(width>500 && width <=750){
                      var owl = $('.owl-carousel');
                      owl.owlCarousel({
                      items:3,
                      loop:true,
                      margin:5,
                      autoplay:true,
                      autoplayTimeout:1500,
                      autoplayHoverPause:true
                      
                  });

                    }
                    else{
                      var owl = $('.owl-carousel');
                      owl.owlCarousel({
                      items:4,
                      loop:true,
                      margin:5,
                      autoplay:true,
                      autoplayTimeout:1500,
                      autoplayHoverPause:true
                      
                  });
                    }
                  }
        $("document").ready(function(){
           resolutioncheck();
            $(function () {

           $('[data-toggle="popover"]').popover()
                                    });

         $('.carousel').carousel({
              interval: 3000
              });
         // var owl = $('.owl-carousel');
         //          owl.owlCarousel({
         //              items:4,
         //              loop:true,
         //              margin:5,
         //              autoplay:true,
         //              autoplayTimeout:1500,
         //              autoplayHoverPause:true
         //          });
                  
                   

                 
                  //  var owlmobile = $('#mobilecarousel');
                  // owlmobile.owlCarousel({
                  //     items:2,
                  //     loop:true,
                  //     margin:10,
                  //     autoplay:true,
                  //     autoplayTimeout:1500,
                  //     autoplayHoverPause:true
                  // });

                  
       });
       </script>

   
</html>
