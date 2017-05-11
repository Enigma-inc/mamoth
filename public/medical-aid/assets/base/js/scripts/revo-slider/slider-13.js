$(document).ready(function() {
    var slider = $('.c-layout-revo-slider .tp-banner');

    var cont = $('.c-layout-revo-slider .tp-banner-container');

    var api = slider.show().revolution({
        sliderType:"standard",
        sliderLayout:"fullwidth",
        dottedOverlay:"none",
        delay:15000,
        viewPort: {
            enable:true,
            outof:"pause",
            visible_area:"80%"
        },
        responsiveLevels:[1240,1024,778,480],
        gridwidth:[1240,1024,778,480],
        gridheight:[600,600,500,400],
        lazyType:"none",
        parallax: {
            type:"mouse",
            origo:"slidercenter",
            speed:2000,
            levels:[2,3,4,5,6,7,12,16,10,50],
        },
      
        fallbacks: {
            simplifyAll:"off",
            nextSlideOnWindowFocus:"off",
            disableFocusListener:false,
        }
    });
}); //ready