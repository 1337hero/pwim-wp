$(function() {


    // TARGET CACHING ELEMENTS VARIABLES
    var el       = $(window),
    init         = true,
    header       = $('.header-main'),
    closeBtn     = $('.close-menu'),
    didScroll    = false,
    prevscroll   = 0,
    sidebarNav   = $('#sidebar-navigation'),
    sidebarOverlay = $('.sidebar-overlay'),
    hamburgerBtn = $('.menu-btn'),
    headerOffset = header.offset(),
    headerHeight = header.height()


    // ANIMATE ON SCROLL PLUGIN
    AOS.init({
      disable: 'mobile'
    });


    //mobile navigation   
    hamburgerBtn.click(function(event){
        event.preventDefault();
        $(this).toggleClass('open');
        sidebarNav.toggleClass('open');
        sidebarOverlay.toggleClass('open');
    }); 

    closeBtn.click(function(event){
        event.preventDefault();
        var obj=$(this).closest(sidebarNav);
        obj.removeClass('open');
    });

    sidebarOverlay.click(function(event){
        event.preventDefault();
        hamburgerBtn.removeClass('open');
        sidebarNav.removeClass('open');
        $(this).removeClass('open');
    });


     //basic page scroll     
    $(".scroll").click(function(event){
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top - 350
            }, 1000);
          }
    });

    // SCROLLING + FIXING HEADER
    el.scroll(function() {
        didScroll = true;
    });
         
    setInterval(function() {
        if ( didScroll ) {
            didScroll = false;

            var newscroll = el.scrollTop();

            if( newscroll >= headerHeight + 75 ){

                if( !header.hasClass('reveal') ){
                    header.addClass('reveal');
                }
            } 

            else {
                if( header.hasClass('reveal') ){
                    header.removeClass('reveal');
                }
            } 

        }       

        prevscroll = newscroll;
        init=false

    }, 250);


});

            document.addEventListener("DOMContentLoaded", function() {
              var lazyloadImages;    

              if ("IntersectionObserver" in window) {
                lazyloadImages = document.querySelectorAll(".lazy");
                var imageObserver = new IntersectionObserver(function(entries, observer) {
                  entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                      var image = entry.target;
                      image.src = image.dataset.src;
                      image.classList.remove("lazy");
                      imageObserver.unobserve(image);
                    }
                  });
                });

                lazyloadImages.forEach(function(image) {
                  imageObserver.observe(image);
                });
              } else {  
                var lazyloadThrottleTimeout;
                lazyloadImages = document.querySelectorAll(".lazy");
                
                function lazyload () {
                  if(lazyloadThrottleTimeout) {
                    clearTimeout(lazyloadThrottleTimeout);
                  }    

                  lazyloadThrottleTimeout = setTimeout(function() {
                    var scrollTop = window.pageYOffset;
                    lazyloadImages.forEach(function(img) {
                        if(img.offsetTop < (window.innerHeight + scrollTop)) {
                          img.src = img.dataset.src;
                          img.classList.remove('lazy');
                        }
                    });
                    if(lazyloadImages.length == 0) { 
                      document.removeEventListener("scroll", lazyload);
                      window.removeEventListener("resize", lazyload);
                      window.removeEventListener("orientationChange", lazyload);
                    }
                  }, 20);
                }

                document.addEventListener("scroll", lazyload);
                window.addEventListener("resize", lazyload);
                window.addEventListener("orientationChange", lazyload);
              }
            })
