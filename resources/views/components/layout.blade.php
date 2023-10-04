<!DOCTYPE html>

<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />

    <title>Green Nature</title>


    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;'
        type='text/css' media='all' />
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;'
        type='text/css' media='all' />
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;'
        type='text/css' media='all' />
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin%2Clatin-ext&amp;'
        type='text/css' media='all' />


    <link rel='stylesheet' href='/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/plugins/superfish/css/superfish.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/plugins/dl-menu/component.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/plugins/font-awesome-new/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/plugins/elegant-font/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/plugins/fancybox/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/plugins/flexslider/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/style-responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/style-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/plugins/masterslider/public/assets/css/masterslider.main.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='/css/master-custom.css' type='text/css' media='all' />


</head>
<script type='text/javascript' src='/js/jquery/jquery.js'></script>
<script type='text/javascript' src='/js/jquery/jquery-migrate.min.js'></script>
<script>
    var ms_grabbing_curosr = '/plugins/masterslider/public/assets/css/common/grabbing.html',
        ms_grab_curosr = '/plugins/masterslider/public/assets/css/common/grab.html';
</script>
<script type='text/javascript' src='/plugins/superfish/js/superfish.js'></script>
<script type='text/javascript' src='/js/hoverIntent.min.js'></script>
<script type='text/javascript' src='/plugins/dl-menu/modernizr.custom.js'></script>
<script type='text/javascript' src='/plugins/dl-menu/jquery.dlmenu.js'></script>
<script type='text/javascript' src='/plugins/jquery.easing.js'></script>
<script type='text/javascript' src='/plugins/fancybox/jquery.fancybox.pack.js'></script>
<script type='text/javascript' src='/plugins/fancybox/helpers/jquery.fancybox-media.js'></script>
<script type='text/javascript' src='/plugins/fancybox/helpers/jquery.fancybox-thumbs.js'></script>
<script type='text/javascript' src='/plugins/flexslider/jquery.flexslider.js'></script>
<script type='text/javascript' src='/plugins/jquery.isotope.min.js'></script>
<script type='text/javascript' src='/js/plugins.js'></script>
<script type='text/javascript' src='/plugins/masterslider/public/assets/js/masterslider.min.js'></script>
<script type='text/javascript' src='/plugins/jquery.transit.min.js'></script>
<script type='text/javascript' src='/plugins/gdlr-portfolio/gdlr-portfolio-script.js'></script>

<x-header />
{{ $slot }}
<x-footer />

<script>
    (function($) {
        "use strict";

        $(function() {
            var masterslider_d1da = new MasterSlider();

            // slider controls
            masterslider_d1da.control('arrows', {
                autohide: true,
                overVideo: true
            });
            masterslider_d1da.control('bullets', {
                autohide: false,
                overVideo: true,
                dir: 'h',
                align: 'bottom',
                space: 6,
                margin: 25
            });
            // slider setup
            masterslider_d1da.setup("slider_1", {
                width: 1140,
                height: 800,
                minHeight: 0,
                space: 0,
                start: 1,
                grabCursor: false,
                swipe: true,
                mouse: false,
                keyboard: true,
                layout: "fullwidth",
                wheel: false,
                autoplay: false,
                instantStartLayers: false,
                mobileBGVideo: false,
                loop: true,
                shuffle: false,
                preload: 0,
                heightLimit: true,
                autoHeight: false,
                smoothHeight: true,
                endPause: false,
                overPause: true,
                fillMode: "fill",
                centerControls: true,
                startOnAppear: false,
                layersMode: "center",
                autofillTarget: "",
                hideLayers: false,
                fullscreenMargin: 0,
                speed: 20,
                dir: "h",
                parallaxMode: 'swipe',
                view: "basic"
            });



            $("head").append(
                "<link rel='stylesheet' id='ms-fonts'  href='http://fonts.googleapis.com/css?family=Montserrat:regular,700%7CCrimson+Text:regular' type='text/css' media='all' />"
            );

            window.masterslider_instances = window.masterslider_instances || {};
            window.masterslider_instances["5_d1da"] = masterslider_d1da;
        });

    })(jQuery);
</script>
</body>

<!--  16:08 GMT -->

</html>
