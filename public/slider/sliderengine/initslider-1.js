jQuery(document).ready(function(){

    var scripts = document.getElementsByTagName("script");

    var jsFolder = "";

    for (var i= 0; i < scripts.length; i++)

    {

        if( scripts[i].src && scripts[i].src.match(/initslider-1\.js/i))

            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);

    }

    jQuery("#amazingslider-1").amazingslider({

        sliderid:1,

        jsfolder:jsFolder,

        width:635,

        height:400,

        skinsfoldername:"",

        loadimageondemand:false,

        videohidecontrols:false,

        watermarktextcss:"font:12px Arial,Tahoma,Helvetica,sans-serif;color:#333;padding:2px 4px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;background-color:#fff;opacity:0.9;filter:alpha(opacity=90);",

        watermarkstyle:"text",

        donotresize:true,

        enabletouchswipe:true,

        fullscreen:false,

        autoplayvideo:false,

        addmargin:true,

        watermarklinkcss:"text-decoration:none;font:12px Arial,Tahoma,Helvetica,sans-serif;color:#333;",

        watermarktext:"amazingslider.com",

        watermarklink:"http://amazingslider.com?source=watermark",

        transitiononfirstslide:false,

        forceflash:false,

        isresponsive:true,

        forceflashonie11:true,

        forceflashonie10:true,

        pauseonmouseover:true,

        playvideoonclickthumb:true,

        showwatermark:false,

        slideinterval:3000,

        watermarkpositioncss:"display:block;position:absolute;bottom:4px;right:4px;",

        watermarkimage:"",

        fullwidth:false,

        randomplay:false,

        watermarktarget:"_blank",

        scalemode:"fill",

        loop:0,

        autoplay:true,

        navplayvideoimage:"play-32-32-0.png",

        navpreviewheight:60,

        timerheight:2,

        descriptioncssresponsive:"font-size:12px;",

        shownumbering:false,

        navthumbresponsivemode:"samecolumn",

        skin:"Cube",

        textautohide:true,

        lightboxshowtwitter:true,

        addgooglefonts:true,

        navshowplaypause:false,

        navshowplayvideo:false,

        navshowplaypausestandalonemarginx:8,

        navshowplaypausestandalonemarginy:8,

        navbuttonradius:0,

        navthumbcolumn:8,

        navthumbnavigationarrowimageheight:32,

        navradius:0,

        navbuttonhighlightcolor:"#333333",

        navthumbsmallcolumn:3,

        lightboxshownavigation:true,

        showshadow:true,

        navfeaturedarrowimagewidth:16,

        lightboxshowsocial:false,

        navpreviewwidth:120,

        googlefonts:"Inder",

        navborderhighlightcolor:"",

        bordercolor:"#ffffff",

        lightboxdescriptionbottomcss:"{color:#333; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}",

        lightboxthumbwidth:80,

        navthumbnavigationarrowimagewidth:32,

        navthumbtitlehovercss:"text-decoration:underline;",

        navthumbmediumheight:64,

        texteffectresponsivesize:600,

        arrowwidth:36,

        texteffecteasing:"easeInCubic",

        texteffect:"slide",

        lightboxthumbheight:60,

        navspacing:8,

        navarrowimage:"navarrows-48-48-1.png",

        ribbonimage:"ribbon_topleft-0.png",

        navwidth:24,

        navheight:24,

        arrowimage:"arrows-36-80-0.png",

        timeropacity:0.6,

        titlecssresponsive:"font-size:12px;",

        navthumbnavigationarrowimage:"carouselarrows-32-32-0.png",

        navshowplaypausestandalone:false,

        texteffect1:"slide",

        navpreviewbordercolor:"#ffffff",

        texteffect2:"slide",

        customcss:"",

        ribbonposition:"topleft",

        navthumbdescriptioncss:"display:block;position:relative;padding:2px 4px;text-align:left;font:normal 12px Arial,Helvetica,sans-serif;color:#333;",

        lightboxtitlebottomcss:"{color:#333; font-size:14px; font-family:Armata,sans-serif,Arial; overflow:hidden; text-align:left;}",

        arrowstyle:"always",

        navthumbmediumsize:800,

        navthumbtitleheight:20,

        textpositionmargintop:24,

        navshowbuttons:true,

        buttoncssresponsive:"",

        texteffectdelay:500,

        navswitchonmouseover:false,

        playvideoimage:"playvideo-64-64-0.png",

        arrowtop:50,

        textstyle:"dynamic",

        playvideoimageheight:64,

        navfonthighlightcolor:"#666666",

        showbackgroundimage:false,

        showpinterest:true,

        navpreviewborder:4,

        navmarginy:16,

        navshowplaypausestandaloneheight:28,

        navdirection:"horizontal",

        navbuttonshowbgimage:true,

        navbuttonbgimage:"navbuttonbgimage-28-28-0.png",

        textbgcss:"display:none;",

        playvideoimagewidth:64,

        buttoncss:"display:block; position:relative; margin-top:10px;",

        navborder:0.5,

        navshowpreviewontouch:true,

        bottomshadowimagewidth:110,

        showtimer:true,

        navmultirows:false,

        navshowpreview:true,

        navpreviewarrowheight:8,

        navmarginx:16,

        navfeaturedarrowimage:"featuredarrow-16-8-2.png",

        texteffectslidedirection1:"right",

        showribbon:false,

        navstyle:"thumbnails",

        textpositionmarginleft:24,

        descriptioncss:"display:block; position:relative; font:12px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#fff;  background-color:#e04000; margin-top:10px; padding:10px; ",

        navplaypauseimage:"navplaypause-28-28-0.png",

        backgroundimagetop:-10,

        timercolor:"#EA2027",

        numberingformat:"%NUM/%TOTAL ",

        navthumbmediumwidth:64,

        navfontsize:12,

        navhighlightcolor:"#333333",

        texteffectdelay1:1000,

        navimage:"bullet-24-24-1.png",

        texteffectdelay2:1500,

        texteffectduration1:600,

        navshowplaypausestandaloneautohide:false,

        texteffectduration2:600,

        navbuttoncolor:"#999999",

        navshowarrow:false,

        texteffectslidedirection:"left",

        navshowfeaturedarrow:true,

        lightboxbarheight:64,

        showfacebook:true,

        titlecss:"display:table; position:relative; font:bold 14px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#fff; white-space:nowrap; background-color:#f7a020; padding:10px;",

        ribbonimagey:0,

        ribbonimagex:0,

        texteffectresponsive:true,

        navthumbsmallheight:48,

        texteffectslidedistance1:120,

        texteffectslidedistance2:120,

        navrowspacing:8,

        navshowplaypausestandaloneposition:"bottomright",

        lightboxshowpinterest:true,

        lightboxthumbtopmargin:12,

        arrowhideonmouseleave:1000,

        navshowplaypausestandalonewidth:28,

        showsocial:false,

        navthumbresponsive:false,

        navfeaturedarrowimageheight:8,

        navopacity:0.8,

        textpositionmarginright:24,

        backgroundimagewidth:120,

        navcolor:"#999999",

        navthumbtitlewidth:120,

        navpreviewposition:"top",

        texteffectseparate:true,

        arrowheight:80,

        arrowmargin:-18,

        texteffectduration:600,

        bottomshadowimage:"bottomshadow-110-95-0.png",

        lightboxshowfacebook:true,

        lightboxshowdescription:false,

        timerposition:"bottom",

        navfontcolor:"#333333",

        navthumbnavigationstyle:"arrow",

        borderradius:5,

        border:0,

        textpositionstatic:"bottom",

        texteffecteasing2:"easeOutCubic",

        navthumbstyle:"imageonly",

        texteffecteasing1:"easeOutCubic",

        textcss:"display:block; padding:8px 16px; text-align:left;",

        navthumbsmallwidth:48,

        navbordercolor:"#ffffff",

        navthumbmediumcolumn:4,

        navpreviewarrowimage:"previewarrow-16-8-2.png",

        navthumbtitlecss:"display:block;position:relative;padding:2px 4px;text-align:left;font:bold 14px Arial,Helvetica,sans-serif;color:#333;",

        showbottomshadow:true,

        texteffectslidedistance:30,

        shadowcolor:"#aaaaaa",

        lightboxshowtitle:true,

        showtwitter:true,

        textpositionmarginstatic:0,

        backgroundimage:"",

        navposition:"bottom",

        navthumbsmallsize:480,

        navpreviewarrowwidth:16,

        textformat:"Color box",

        texteffectslidedirection2:"right",

        bottomshadowimagetop:95,

        textpositiondynamic:"bottomleft",

        shadowsize:5,

        lightboxthumbbottommargin:8,

        textpositionmarginbottom:24,

        initsocial:false,

        socialmode:"mouseover",

        slice: {

            checked:true,

            effectdirection:0,

            effects:"up,down,updown",

            slicecount:10,

            duration:1500,

            easing:"easeOutCubic"

        },

        threedwithzoom: {

            duration:2500,

            fallback:"flip",

            checked:true

        },

        flipwithzoom: {

            duration:2000,

            checked:true

        },

        blinds: {

            duration:2000,

            easing:"easeOutCubic",

            checked:true,

            effectdirection:0,

            slicecount:3

        },

        transition:"slice,threedwithzoom,flipwithzoom,blinds",

        scalemode:"fill",

        isfullscreen:false,

        textformat: {

            "Color box right align": {

                titlecssresponsive:"font-size:12px;",

                descriptioncss:"display:block; position:relative; font:12px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#fff;  background-color:#e04000; margin-top:10px; padding:10px; ",

                texteffect1:"slide",

                texteffect2:"slide",

                descriptioncssresponsive:"font-size:12px;",

                texteffectseparate:true,

                texteffectduration:600,

                textpositionmarginleft:24,

                textpositionstatic:"bottom",

                buttoncssresponsive:"",

                buttoncss:"display:block; position:relative; margin-top:10px;",

                addgooglefonts:false,

                textpositionmargintop:24,

                texteffecteasing2:"easeOutCubic",

                texteffectdelay:500,

                texteffecteasing1:"easeOutCubic",

                texteffectdelay1:1000,

                texteffectdelay2:1500,

                texteffectduration1:600,

                googlefonts:"",

                textpositionmarginright:24,

                textautohide:true,

                textstyle:"dynamic",

                texteffectslidedistance:120,

                texteffectslidedirection:"left",

                textcss:"display:block; padding:8px 16px; text-align:right;",

                titlecss:"display:table; position:relative; font:bold 14px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#fff; white-space:nowrap; background-color:#f7a020; padding:10px; ",

                textpositionmarginstatic:0,

                texteffectresponsivesize:600,

                texteffectslidedirection1:"left",

                texteffectslidedistance1:120,

                texteffectslidedistance2:120,

                texteffectslidedirection2:"left",

                textbgcss:"display:none;",

                texteffectresponsive:true,

                texteffecteasing:"easeOutCubic",

                textpositiondynamic:"bottomright",

                textpositionmarginbottom:24,

                texteffect:"slide",

                texteffectduration2:600

            }

        }

    });

});