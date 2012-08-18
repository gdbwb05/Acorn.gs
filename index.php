
<?php	
 /// http://net.tutsplus.com/tutorials/php/organize-your-next-php-project-the-right-way/


    require_once(realpath(dirname(__FILE__) . "/app/config/config.php"));
    require_once(realpath(dirname(__FILE__) . "/vendor/plugins/template/template.php"));
 ?>

<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> 
<html lang="" dir="">

    <head>
        <meta charset="utf-8">

        <!-- Use the .htaccess and remove these lines to avoid edge case issues.
             More info: h5bp.com/i/378 -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title></title>
        <meta name="description" content="">
        <meta name="location" content="akron, oh">
        <meta name="language" content="english">
        <meta name="distribution" content="global">
        <!-- Mobile viewport optimized: h5bp.com/viewport -->


        <link rel="stylesheet" href="/Basic/public/assets/css/responsive_24/responsive-gs-24col.css">
        <link rel="stylesheet" href="/Basic/public/assets/css/responsive_24/media-queries.css" media="screen">
        <link rel="stylesheet" href="/Basic/public/assets/css/responsive_24/style.css"> 

    </head>
    <body  >
        <section >
            <!-- START -- CONTENT WRAPPER -->  
            <div class="container">

                <!-- START -- HEADER 
                http://microformats.org/wiki/existing-rel-values#HTML5_link_type_extensions
                
                -->    

<?php	
 /// http://net.tutsplus.com/tutorials/php/organize-your-next-php-project-the-right-way/

 

/*
		Now you can handle all your php logic outside of the template
		file which makes for very clean code!
	*/
	
	$setInIndexDotPhp = "Hey! I was set in the index.php file.";
	
	// Must pass in variables (as an array) to use in template
	$variables = array(
		'setInIndexDotPhp' => $setInIndexDotPhp
	);
	
	 renderLayoutWithContentFile("html.php", $variables);


?>


            </div>
            <!-- END -- CONTENT WRAPPER --> 




            <!-- JavaScript at the bottom for fast page loading -- http://net.tutsplus.com/tutorials/javascript-ajax/the-essentials-of-writing-high-quality-javascript/ -->

            <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="resources/libs/jquery/jquery-1.7.1.min.js"><\/script>')</script>

            <!-- scripts concatenated and minified via build script -- http://html5boilerplate.com/docs/Tips-For-Customizing-Boilerplate/ 
            http://www.learningjquery.com/2006/09/multiple-document-ready
            
            use jquery.script.js loader to load scripts -- http://dustindiaz.com/scriptjs
            > keep in order need jqury first then others below
            -->

            <!-- START -- jquery -- responsive scripts -->


            <!-- -- jquery -- respond -- https://github.com/scottjehl/Respond -->
            <script src="resources/libs/j.respond/respond.min.js"></script>

            <!-- -- jquery -- fit text -- http://fittextjs.com/ -->
            <script src="resources/libs/j.fittext/jquery.fittext.js"></script> 

            <!-- -- jquery -- adaptive image -- http://adaptive-images.com/  
            <script src="resources/libs/j.adaptiveimages/plugins.js"></script>
            -->

            <!-- -- jquery -- respond -- https://github.com/scottjehl/Respond -->
            <script src="resources/libs/j.backtotop/jquery.backtotop.js"></script>

            <!-- END -- jquery -- responsive scripts -->


            <script src="js/plugins.js"></script>
            <script src="js/script.js"></script>
            <!-- end scripts -->

            <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
                 mathiasbynens.be/notes/async-analytics-snippet -->
            <script>
                var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
                (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
                    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
                    s.parentNode.insertBefore(g,s)}(document,'script'));
            </script>


        </section>
    </body>
</html>

