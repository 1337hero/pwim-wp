        // THIS IS A MESS, BUT IT WORKS
        // CHECKS IF MOBILE, IF NOT IT LOADS VIDEO - IF MOBILE, THEN NO VIDEO
        ! function(a) {
             var b = /iPhone/i,
                 c = /iPod/i,
                 d = /iPad/i,
                 e = /(?=.*\bAndroid\b)(?=.*\bMobile\b)/i,
                 f = /Android/i,
                 g = /(?=.*\bAndroid\b)(?=.*\bSD4930UR\b)/i,
                 h = /(?=.*\bAndroid\b)(?=.*\b(?:KFOT|KFTT|KFJWI|KFJWA|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|KFARWI|KFASWI|KFSAWI|KFSAWA)\b)/i,
                 i = /IEMobile/i,
                 j = /(?=.*\bWindows\b)(?=.*\bARM\b)/i,
                 k = /BlackBerry/i,
                 l = /BB10/i,
                 m = /Opera Mini/i,
                 n = /(CriOS|Chrome)(?=.*\bMobile\b)/i,
                 o = /(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,
                 p = new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)", "i"),
                 q = function(a, b) {
                     return a.test(b)
                 },
                 r = function(a) {
                     var r = a || navigator.userAgent,
                         s = r.split("[FBAN");
                     return "undefined" != typeof s[1] && (r = s[0]), s = r.split("Twitter"), "undefined" != typeof s[1] && (r = s[0]), this.apple = {
                         phone: q(b, r),
                         ipod: q(c, r),
                         tablet: !q(b, r) && q(d, r),
                         device: q(b, r) || q(c, r) || q(d, r)
                     }, this.amazon = {
                         phone: q(g, r),
                         tablet: !q(g, r) && q(h, r),
                         device: q(g, r) || q(h, r)
                     }, this.android = {
                         phone: q(g, r) || q(e, r),
                         tablet: !q(g, r) && !q(e, r) && (q(h, r) || q(f, r)),
                         device: q(g, r) || q(h, r) || q(e, r) || q(f, r)
                     }, this.windows = {
                         phone: q(i, r),
                         tablet: q(j, r),
                         device: q(i, r) || q(j, r)
                     }, this.other = {
                         blackberry: q(k, r),
                         blackberry10: q(l, r),
                         opera: q(m, r),
                         firefox: q(o, r),
                         chrome: q(n, r),
                         device: q(k, r) || q(l, r) || q(m, r) || q(o, r) || q(n, r)
                     }, this.seven_inch = q(p, r), this.any = this.apple.device || this.android.device || this.windows.device || this.other.device || this.seven_inch, this.phone = this.apple.phone || this.android.phone || this.windows.phone, this.tablet = this.apple.tablet || this.android.tablet || this.windows.tablet, "undefined" == typeof window ? this : void 0
                 },
                 s = function() {
                     var a = new r;
                     return a.Class = r, a
                 };
             "undefined" != typeof module && module.exports && "undefined" == typeof window ? module.exports = r : "undefined" != typeof module && module.exports && "undefined" != typeof window ? module.exports = s() : "function" == typeof define && define.amd ? define("isMobile", [], a.isMobile = s()) : a.isMobile = s()
         }(this);
         (function() {
             if (isMobile.apple.phone || isMobile.android.phone || isMobile.seven_inch) {
                // DO NOTHING
             } else {
                
                // NOW WE CAN LOAD THE VIDEO AS IT'S ASSUMED THEY AREN'T ON A PHONE
                 var sources = document.querySelectorAll('video#timelapse source');
                 var video = document.querySelector('video#timelapse');
                 for (var i = 0; i < sources.length; i++) {
                     sources[i].setAttribute('src', sources[i].getAttribute('data-src'));
                 }
                 video.load();

                 //FULLSCREEN VIDEO WITH RESIZING 
                 var min_w = 300, // minimum video width allowed
                     vid_w_orig, // original video dimensions
                     vid_h_orig;

                 $(function() { // runs after DOM has loaded
                     vid_w_orig = parseInt($('video').attr('width'));
                     vid_h_orig = parseInt($('video').attr('height'));

                     $(window).resize(function() {
                         resizeToCover();
                     });
                     $(window).trigger('resize');
                 });

                 function resizeToCover() {

                     // set the video viewport to the window size
                     $('.video-container').width($(window).width());
                     $('.video-container').height($(window).height());
                     $('.hero-banner').height($(window).height());

                     // use largest scale factor of horizontal/vertical
                     var scale_h = $(window).width() / vid_w_orig;
                     var scale_v = $(window).height() / vid_h_orig;
                     var scale = scale_h > scale_v ? scale_h : scale_v;

                     // don't allow scaled width < minimum video width
                     if (scale * vid_w_orig < min_w) {
                         scale = min_w / vid_w_orig;
                     };

                     // now scale the video
                     $('video').width(scale * vid_w_orig);
                     $('video').height(scale * vid_h_orig);

                     // and center it by scrolling the video viewport
                     $('.video-container').scrollLeft(($('video').width() - $(window).width()) / 2);
                     $('.video-container').scrollTop(($('video').height() - $(window).height()) / 2);

                 };
             }
         })();