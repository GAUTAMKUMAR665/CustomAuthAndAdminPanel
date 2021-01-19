<!DOCTYPE html>
<html lang="en">
<head>
	<title>Targlo - Landing Page Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Targlo Landing Page Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{asset('css/report.css')}}">
	<link rel="stylesheet" href="{{asset('css/targlo/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/targlo/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/targlo/css/themify-icons.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/logout.css')}}"/>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/sessy.css')}}">


	<link rel="stylesheet" href="{{asset('css/targlo/css/style.css')}}"/>

</head>
<body>


	<!-- Header section -->

    <header class="header-section">
		<div class="upper-header">

            @if (JWTAuth::user())
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            <form action="Logout" method="post" class="logout">
                <input type="hidden" name="token" value={{ $token }} >
                <input type="submit" value="Logout">
                @csrf
            </form>
            @endif

            <a href="/api/Login/view"><i class="fa fa-user" aria-hidden="true"></i>Login</a>
		  <a href=""><i class="fa fa-envelope" aria-hidden="true"></i>www.targlo.com</a>
		  <a href=""><i class="fa fa-phone" aria-hidden="true"></i>444 444 4444</a>
		</div>
		<div class="lower-header">
		  <nav class="navbar navbar-expand-md navbar-dark">

			<a href="index.html" class="site-logo">
			  <img src="{{ asset('css/targlo/img/logo.png') }}" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav ml-auto">
				<li class="nav-item active">
				  <a class="nav-link" href="/index">Home <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item " >
				  <a class="nav-link " href="/sessy">
					Industry
				</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link " href="/service">Services</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link " href="/aboutus">About</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link " href="/contactus">Contact</a>
				</li>
			  </ul>
			  <form class="form-inline my-2 my-lg-0" action="/industry/search" method="post">
				<input class="form-control mr-sm-2 searchin" type="search" placeholder="Search" aria-label="Search" name="industry">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
                @csrf
			  </form>

		  </div>

		  </nav>
		</div>
		  </header>
		<!-- Header section end -->
	<main>

        @yield('content')

    </main>


	<!-- Newsletter section -->
	<section class="newsletter-section gradient-bg">
		<div class="container text-white">
			<div class="row">
				<div class="col-lg-7 newsletter-text">
					<h2>Subscribe to our Newsletter</h2>
					<p>Sign up for our weekly industry updates, insider perspectives and in-depth market analysis.</p>
				</div>
				<div class="col-lg-5 col-md-8 offset-lg-0 offset-md-2">
					<form class="newsletter-form">
						<input type="text" placeholder="Enter your email">
						<button>Get Started</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row spad">
				<div class="col-md-6 col-lg-3 footer-widget">
					<img src="img/logo-white.png" class="mb-4" alt="">
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum.</p>

				</div>
				<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
					<h5 class="widget-title">Quick Links</h5>
					<ul>
						<li><a href="#">Network Stats</a></li>
						<li><a href="#">Block Explorers</a></li>
						<li><a href="#">Governance</a></li>
						<li><a href="#">Exchange Markets</a></li>

					</ul>

				</div>
				<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
					<h5 class="widget-title">Quick Links</h5>
					<ul>
						<li><a href="#">Network Stats</a></li>
						<li><a href="#">Block Explorers</a></li>
						<li><a href="#">Governance</a></li>
						<li><a href="#">Exchange Markets</a></li>

					</ul>
				</div>
				<div class="col-md-6 col-lg-3 footer-widget pl-lg-5 pl-3">
					<h5 class="widget-title">Follow Us</h5>
					<div class="social">
						<a href="" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="" class="google"><i class="fa fa-google-plus"></i></a>
						<a href="" class="instagram"><i class="fa fa-instagram"></i></a>
						<a href="" class="twitter"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="row">
					<p>
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
					</p>
					<div class="col-lg-8 text-center text-lg-right">
						<ul class="footer-nav">
							<li><a href="">DPA</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Privacy Policy </a></li>
							<li><a href="">support@company.com</a></li>
							<li><a href="">(123) 456-7890</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section -->

	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('js/targlo/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/targlo/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/targlo/js/map.js') }}"></script>
	<script src="{{ asset('js/targlo/js/main.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<!-- slick slider js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <script>
        $(function(){


          $('.searchin').on('keyup',function()
          {
            $('.dropdown-menu').toggle();

            var inserch=$('.searchin').val().trim();

            var ulind=$('.ulindus');

            if(inserch!='')
            {

                $('.ulindus').children('li').hide();
                $('.ulindus').children('li').filter(function()
                {
                    if(inserch==$(this).text())
                    {
                        $('.dropdown-menu').css("height","70px");
                        var sfound=$(this).insertAfter($('.ulindus').children('li:first'));
                        console.log($(this).text());
                        console.log($(this).index());
                    return sfound;
                    }

                }).show();
            }
            else{
                window.location.reload();
               /*  $('.dropdown-menu').css("height","auto");
                $('.ulindus').children('li').show(); */
            }

            //alert(inserch);
          })



        })
    </script>
    <script>

        /**
         * Copyright (C) 2012 by Justin Windle
         *
         * Permission is hereby granted, free of charge, to any person obtaining a copy
         * of this software and associated documentation files (the "Software"), to deal
         * in the Software without restriction, including without limitation the rights
         * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
         * copies of the Software, and to permit persons to whom the Software is
         * furnished to do so, subject to the following conditions:
         *
         * The above copyright notice and this permission notice shall be included in
         * all copies or substantial portions of the Software.
         *
         * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
         * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
         * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
         * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
         * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
         * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
         * THE SOFTWARE.
         */

        (function($) {

        // Global initialisation flag
        var initialized = false;

        // For detecting browser prefix and capabilities
        var el = document.createElement( 'div' );
        var re = /^(Moz|(w|W)ebkit|O|ms)(?=[A-Z])/;

        // Establish vendor prefix and CSS 3D support
        var vendor = (function() { for ( var p in el.style ) if( re.test(p) ) return p.match(re)[0]; })() || '';
        var canRun = vendor + 'Perspective' in el.style;
        var prefix = '-' + vendor.toLowerCase() + '-';

        var $this, $root, $base, $kids, $node, $item, $over, $back;
        var wait, anim, last;

        // Public API
        var api = {

            // Toggle open / closed
            toggle: function() {

                $this = $( this );
                $this.makisu( $this.hasClass( 'open' ) ? 'close' : 'open' );
            },

            // Trigger the unfold animation
            open: function( speed, overlap, easing ) {

                // Cache DOM references
                $this = $(this);
                $root = $this.find( '.root' );
                $kids = $this.find( '.node' ).not( $root );

                // Establish values or fallbacks
                speed = utils.resolve( $this, 'speed', speed );
                easing = utils.resolve( $this, 'easing', easing );
                overlap = utils.resolve( $this, 'overlap', overlap );

                $kids.each( function( index, el ) {

                    // Establish settings for this iteration
                    anim = 'unfold' + ( !index ? '-first' : '' );
                    last = index === $kids.length - 1;
                    time = speed * ( 1 - overlap );
                    wait = index * time;

                    // Cache DOM references
                    $item = $( el );
                    $over = $item.find( '.over' );

                    // Element animation
                    $item.css(utils.prefix({
                        'transform': 'rotateX(180deg)',
                        'animation': anim + ' ' + speed + 's ' + easing + ' ' + wait + 's 1 normal forwards'
                    }));

                    // Shading animation happens when the next item starts
                    if ( !last ) wait = ( index + 1 ) * time;

                    // Shading animation
                    $over.css(utils.prefix({
                        'animation': 'unfold-over ' + (speed * 0.45) + 's ' + easing + ' ' + wait + 's 1 normal forwards'
                    }));
                });

                // Add momentum to the container
                $root.css(utils.prefix({
                    'animation': 'swing-out ' + ( $kids.length * time * 1.4 ) + 's ease-in-out 0s 1 normal forwards'
                }));

                $this.addClass( 'open' );
            },

            // Trigger the fold animation
            close: function( speed, overlap, easing ) {

                // Cache DOM references
                $this = $(this);
                $root = $this.find( '.root' );
                $kids = $this.find( '.node' ).not( $root );

                // Establish values or fallbacks
                speed = utils.resolve( $this, 'speed', speed ) * 0.66;
                easing = utils.resolve( $this, 'easing', easing );
                overlap = utils.resolve( $this, 'overlap', overlap );

                $kids.each( function( index, el ) {

                    // Establish settings for this iteration
                    anim = 'fold' + ( !index ? '-first' : '' );
                    last = index === 0;
                    time = speed * ( 1 - overlap );
                    wait = ( $kids.length - index - 1 ) * time;

                    // Cache DOM references
                    $item = $( el );
                    $over = $item.find( '.over' );

                    // Element animation
                    $item.css(utils.prefix({
                        'transform': 'rotateX(0deg)',
                        'animation': anim + ' ' + speed + 's ' + easing + ' ' + wait + 's 1 normal forwards'
                    }));

                    // Adjust delay for shading
                    if ( !last ) wait = ( ( $kids.length - index - 2 ) * time ) + ( speed * 0.35 );

                    // Shading animation
                    $over.css(utils.prefix({
                        'animation': 'fold-over ' + (speed * 0.45) + 's ' + easing + ' ' + wait + 's 1 normal forwards'
                    }));
                });

                // Add momentum to the container
                $root.css(utils.prefix({
                    'animation': 'swing-in ' + ( $kids.length * time * 1.0 ) + 's ease-in-out 0s 1 normal forwards'
                }));

                $this.removeClass( 'open' );
            }
        };

        // Utils
        var utils = {

            // Resolves argument values to defaults
            resolve: function( $el, key, val ) {
                return typeof val === 'undefined' ? $el.data( key ) : val;
            },

            // Prefixes a hash of styles with the current vendor
            prefix: function( style ) {

                for ( var key in style ) {
                    style[ prefix + key ] = style[ key ];
                }

                return style;
            },

            // Inserts rules into the document styles
            inject: function( rule ) {

                try {

                    var style = document.createElement( 'style' );
                    style.innerHTML = rule;
                    document.getElementsByTagName( 'head' )[0].appendChild( style );

                } catch ( error ) {}
            }
        };

        // Element templates
        var markup = {
            node: '<span class="node"/>',
            back: '<span class="face back"/>',
            over: '<span class="face over"/>'
        };

        // Plugin definition
        $.fn.makisu = function( options ) {

            // Notify if 3D isn't available
            if ( !canRun ) {

                var message = 'Failed to detect CSS 3D support';

                if( console && console.warn ) {

                    // Print warning to the console
                    console.warn( message );

                    // Trigger errors on elements
                    this.each( function() {
                        $( this ).trigger( 'error', message );
                    });
                }

                return;
            }

            // Fires only once
            if ( !initialized ) {

                initialized = true;

                // Unfold
                utils.inject( '@' + prefix + 'keyframes unfold        {' +

                    '0%   {' + prefix + 'transform: rotateX(180deg);  }' +
                    '50%  {' + prefix + 'transform: rotateX(-30deg);  }' +
                    '100% {' + prefix + 'transform: rotateX(0deg);    }' +

                    '}');

                // Unfold (first item)
                utils.inject( '@' + prefix + 'keyframes unfold-first  {' +

                    '0%   {' + prefix + 'transform: rotateX(-90deg);  }' +
                    '50%  {' + prefix + 'transform: rotateX(60deg);   }' +
                    '100% {' + prefix + 'transform: rotateX(0deg);    }' +

                    '}');

                // Fold
                utils.inject( '@' + prefix + 'keyframes fold          {' +

                    '0%   {' + prefix + 'transform: rotateX(0deg);    }' +
                    '100% {' + prefix + 'transform: rotateX(180deg);  }' +

                    '}');

                // Fold (first item)
                utils.inject( '@' + prefix + 'keyframes fold-first    {' +

                    '0%   {' + prefix + 'transform: rotateX(0deg);    }' +
                    '100% {' + prefix + 'transform: rotateX(-180deg); }' +

                    '}');

                // Swing out
                utils.inject( '@' + prefix + 'keyframes swing-out     {' +

                    '0%   {' + prefix + 'transform: rotateX(0deg);    }' +
                    '30%  {' + prefix + 'transform: rotateX(-30deg);  }' +
                    '60%  {' + prefix + 'transform: rotateX(15deg);   }' +
                    '100% {' + prefix + 'transform: rotateX(0deg);    }' +

                    '}');

                // Swing in
                utils.inject( '@' + prefix + 'keyframes swing-in      {' +

                    '0%   {' + prefix + 'transform: rotateX(0deg);    }' +
                    '50%  {' + prefix + 'transform: rotateX(-10deg);  }' +
                    '90%  {' + prefix + 'transform: rotateX(15deg);   }' +
                    '100% {' + prefix + 'transform: rotateX(0deg);    }' +

                    '}');

                // Shading (unfold)
                utils.inject( '@' + prefix + 'keyframes unfold-over   {' +
                    '0%   { opacity: 1.0; }' +
                    '100% { opacity: 0.0; }' +
                    '}');

                // Shading (fold)
                utils.inject( '@' + prefix + 'keyframes fold-over     {' +
                    '0%   { opacity: 0.0; }' +
                    '100% { opacity: 1.0; }' +
                    '}');

                // Node styles
                utils.inject( '.node {' +
                    'position: relative;' +
                    'display: block;' +
                    '}');

                // Face styles
                utils.inject( '.face {' +
                    'pointer-events: none;' +
                    'position: absolute;' +
                    'display: block;' +
                    'height: 100%;' +
                    'width: 100%;' +
                    'left: 0;' +
                    'top: 0;' +
                    '}');
            }

            // Merge options & defaults
            var opts = $.extend( {}, $.fn.makisu.defaults, options );

            // Extract api method arguments
            var args = Array.prototype.slice.call( arguments, 1 );

            // Main plugin loop
            return this.each( function () {

                // If the user is calling a method...
                if ( api[ options ] ) {
                    return api[ options ].apply( this, args );
                }

                // Store options in view
                $this = $( this ).data( opts );

                // Only proceed if the scene hierarchy isn't already built
                if ( !$this.data( 'initialized' ) ) {

                    $this.data( 'initialized', true );

                    // Select the first level of matching child elements
                    $kids = $this.children( opts.selector );

                    // Build a scene graph for elements
                    $root = $( markup.node ).addClass( 'root' );
                    $base = $root;

                    // Process each element and insert into hierarchy
                    $kids.each( function( index, el ) {

                        $item = $( el );

                        // Which animation should this node use?
                        anim = 'fold' + ( !index ? '-first' : '' );

                        // Since we're adding absolutely positioned children
                        $item.css( 'position', 'relative' );

                        // Give the item some depth to avoid clipping artefacts
                        $item.css(utils.prefix({
                            'transform-style': 'preserve-3d',
                            'transform': 'translateZ(-0.1px)'
                        }));

                        // Create back face
                        $back = $( markup.back );
                        $back.css( 'background', $item.css( 'background' ) );
                        $back.css(utils.prefix({ 'transform': 'translateZ(-0.1px)' }));

                        // Create shading
                        $over = $( markup.over );
                        $over.css(utils.prefix({ 'transform': 'translateZ(0.1px)' }));
                        $over.css({
                            'background': opts.shading,
                            'opacity': 0.0
                        });

                        // Begin folded
                        $node = $( markup.node ).append( $item );
                        $node.css(utils.prefix({
                            'transform-origin': '50% 0%',
                            'transform-style': 'preserve-3d',
                            'animation': anim + ' 1ms linear 0s 1 normal forwards'
                        }));

                        // Build display list
                        $item.append( $over );
                        $item.append( $back );
                        $base.append( $node );

                        // Use as parent in next iteration
                        $base = $node;
                    });

                    // Set root transform settings
                    $root.css(utils.prefix({
                        'transform-origin': '50% 0%',
                        'transform-style': 'preserve-3d'
                    }));

                    // Apply perspective
                    $this.css(utils.prefix({
                        'transform': 'perspective(' + opts.perspective + 'px)'
                    }));

                    // Display the scene
                    $this.append( $root );
                }
            });
        };

        // Default options
        $.fn.makisu.defaults = {

            // Perspective to apply to rotating elements
            perspective: 1200,

            // Default shading to apply (null => no shading)
            shading: 'rgba(0,0,0,0.12)',

            // Area of rotation (fraction or pixel value)
            selector: null,

            // Fraction of speed (0-1)
            overlap: 0.6,

            // Duration per element
            speed: 0.8,

            // Animation curve
            easing: 'ease-in-out'
        };

        $.fn.makisu.enabled = canRun;

        })( jQuery );

        // The `enabled` flag will be `false` if CSS 3D isn't available

        if ( $.fn.makisu.enabled ) {

        var $sashimi = $( '.sashimi' );
        var $nigiri = $( '.nigiri' );
        var $maki = $( '.maki' );

        // Create Makisus

        $nigiri.makisu({
            selector: 'dd',
            overlap: 0.85,
            speed: 1.7
        });

        $maki.makisu({
            selector: 'dd',
            overlap: 0.6,
            speed: 0.85
        });

        $sashimi.makisu({
            selector: 'dd',
            overlap: 0.2,
            speed: 0.5
        });

        // Open all

        $( '.list' ).makisu( 'open' );

        // Toggle on click

        $( '.toggle' ).on( 'click', function() {
            $( '.list' ).makisu( 'toggle' );
        });

        // Disable all links

        $( '.demo a' ).click( function( event ) {
            event.preventDefault();
        });

        } else {

        $( '.warning' ).show();
        }
            </script>
</body>
</html>
