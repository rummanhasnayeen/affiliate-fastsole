

//Owl Carousel


jQuery(document).ready(function() {
    jQuery("#on-focus").owlCarousel({
        responsive:{
            0:{
                items:2 
            },
            480:{
                items:3, // from 480 to 677 
            },
            678:{
                items:3, 
            },
            960:{
                items:4,  
            },
            1200:{
                items:5,
            }
        },
        loop:true,
        margin:0,
        autoplay:3000,
        autoplayTimeout:3000,
        stopOnHover:true,
        nav:true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'], 
        autoplayHoverPause:true,
        autoplaySpeed:1000,
        animateIn: 'fadeIn'
    });

    var releasesTabCarouselOptions = {
		responsive:{
			0:{
				items:1 
			},
			480:{
				items:1
			},
			768:{
				items: 1 
			},
			992:{
				items:4,  
			}
		},
		loop:true,
		margin:0,
		autoplay:true,
		autoplayTimeout:3000,
		stopOnHover:true,
		nav:true,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'], 
		autoplayHoverPause:true,
		autoplaySpeed:1000
    };

	jQuery(".instock").owlCarousel(releasesTabCarouselOptions);
	jQuery(".coming-soon").owlCarousel(releasesTabCarouselOptions);
	jQuery(".this-week").owlCarousel(releasesTabCarouselOptions);
	jQuery(".best-seller").owlCarousel(releasesTabCarouselOptions);
	jQuery(".new-arrivals").owlCarousel(releasesTabCarouselOptions);


	var brandsTabCarouselOptions = {
		responsive:{
			0:{
				items:1 
			},
			480:{
				items:1,
			},
			768:{
				items:1, 
			},
			992:{
				items:4,
			}
		},
		loop:true,
		margin:0,
		autoplay:true,
		autoplayTimeout:3000,
		stopOnHover:true,
		nav:true,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'], 
		autoplayHoverPause:true,
		autoplaySpeed:1000
    };

	jQuery(".nike").owlCarousel(brandsTabCarouselOptions);
	jQuery(".adidas").owlCarousel(brandsTabCarouselOptions);
	jQuery(".eqt").owlCarousel(brandsTabCarouselOptions),
	jQuery(".puma").owlCarousel(brandsTabCarouselOptions),
	jQuery(".yeezy").owlCarousel(brandsTabCarouselOptions);
	


    var relatedProductCarouselOptions = {
        responsive:{
            0:{
                items:1 
            },
            480:{
                items:2,
            },
            768:{
                items:3, 
            },
            992:{
                items:4,
            }
        },
        loop:true,
        margin:0,
        autoplay:true,
        autoplayTimeout:3000,
        stopOnHover:true,
        nav:true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'], 
        autoplayHoverPause:true,
        autoplaySpeed:1000
    };

    jQuery(".related-product").owlCarousel(relatedProductCarouselOptions);

    jQuery(".release-sidebar-slider").owlCarousel({
        items:1,
        loop:true,
        margin:0,
        autoplay:true,
        autoplayTimeout:3000,
        stopOnHover:true,
        nav:false, 
        autoplayHoverPause:true,
        autoplaySpeed:1000,
    });

	//wow.js animation
	new WOW().init();


    //preloder
    jQuery(".fakeloader1").fakeLoader({
        timeToHide:1200,
        bgColor:"#fff",
        spinner:"spinner2"
    }); 
       
    // Stellar nav responsive menu
    jQuery('.stellarnav').stellarNav({
        theme: 'light'
    });

}),

 

//main slider

 jQuery(window).load(function() {
    jQuery('#slider').nivoSlider({
       effect: "random",
       pauseTime: 5e3,
     });
    
    jQuery('#release-slider').nivoSlider({
       effect: "random",
       pauseTime: 5e3,
     });
});





//Responsive nav tabs
jQuery(document).ready(function() {

    // DEPENDENCY: https://github.com/flatlogic/bootstrap-tabcollapse


    // if the tabs are in a narrow column in a larger viewport
    jQuery('.brands-sidebar-tabs').tabCollapse({
        tabsClass: 'visible-tabs',
        accordionClass: 'hidden-tabs'
    });
    jQuery('.releases-sidebar-tabs').tabCollapse({
        tabsClass: 'visible-tabs',
        accordionClass: 'hidden-tabs'
    });

    // if the tabs are in wide columns on larger viewports
    // jQuery('.content-tabs').tabCollapse();

    // initialize tab function
    jQuery('.nav-tabs a').click(function(e) {
        e.preventDefault();
        jQuery(this).tab('show');
    });

    // slide to top of panel-group accordion
    jQuery('.panel-group').on('shown.bs.collapse', function() {
		var panel = jQuery(this).find('.in');
        jQuery('html, body').animate({
            scrollTop: panel.offset().top + (-60)
        }, 500);
    });

    /**
     * Fix two accoudion collapsed at a time issue
     */
	jQuery(document).on('click', '.js-tabcollapse-panel-heading', function(event){
		jQuery(this).parents('.panel').siblings().each(function(index, accorTab){
			jQuery(accorTab).find('a.js-tabcollapse-panel-heading').addClass('collapsed');
			jQuery(accorTab).find('.panel-collapse').removeClass('in');
		});
	}); // 

});
   

/*
|--------------------------------
| Sourov Scripts
|--------------------------------
*/
jQuery(document).ready(function(jQuery){

    /**
     * Sticky menu
     */
    jQuery("#sticky-header").sticky({topSpacing:0});

    /**
     * Left Side Nav
     */
    jQuery('.open-left-menu').click(function(){
        jQuery('body').addClass('leftmenu-opened');
    });

    /**
     * Right Side Nav
     */
    jQuery('.open-right-menu').click(function(){
        jQuery('body').addClass('rightmenu-opened');
    });

    /**
     * Remove side menu
     */
    jQuery('.content-wrapper-overlay').click(function(){
    	jQuery('body').removeClass('leftmenu-opened');
    	jQuery('body').removeClass('rightmenu-opened');
    });
    jQuery('.left-side-menu .close-sidenav').click(function(){
    	jQuery('body').removeClass('leftmenu-opened');
    });
    jQuery('.right-side-menu .close-sidenav').click(function(){
    	jQuery('body').removeClass('rightmenu-opened');
    });

    /**
     * Handle submenu of sidenav
     */
    var allMenus = jQuery('ul.sidenav-menu li');
	allMenus.each(function(){
	    if(jQuery('ul',this).length){
	        jQuery(this).addClass('has-submenu');
	    }
	})
    
    jQuery('ul.sidenav-menu li.has-submenu').click(function(){
    	var clickedLi = jQuery(this);
    	clickedLi.children('ul').slideToggle(500);
    	setTimeout(function(){
    		clickedLi.toggleClass('opened');
    	}, 400);
    });

    /**
     * Toggle search box in mobile
    
    jQuery('.xs-search-icon').click(function(){
    	jQuery(this).siblings('.navbar-form').slideToggle();
    	jQuery(this).toggleClass('sboxopened');
    });
     */
	
}); // Document ready

jQuery('.totop').tottTop({
    duration: 400,
    scrtollTopBtnDuration: 400,


});
