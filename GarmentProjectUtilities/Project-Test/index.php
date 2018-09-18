<html>
    <head>
        <title>Foursquare</title>
        <script src="jquery/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/modal.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(function() {
                    $('.toggle-nav').click(function() {
                        toggleNav();
                    });
                });
                function toggleNav() {
                    if ($('#site-wrapper').hasClass('show-nav')) {
                        $('#site-wrapper').removeClass('show-nav');
                    } 
                    else {
                        $('#site-wrapper').addClass('show-nav');
                    }
                }
            });
        </script>
        <style type="text/css">
            #site-wrapper {
              position: relative;
              overflow: hidden;
              width: 100%;
              
              height: 5000px;
            }
            #site-canvas {
              width: 100%;
              height: 100%;
              position: relative;
              
              -webkit-transform: translateX(0);
              transform: translateX(0);
              
              -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
              
              -webkit-transition: 300ms ease all;
              transition: 300ms ease all;
             
              -webkit-backface-visibility: hidden;
              backface-visibility: hidden;
                
              padding: 1% 0;
            }
            #site-canvas {
                -webkit-transition: all 300ms cubic-bezier(0.32,1.25,0.375,1.15);
                transition: all 300ms cubic-bezier(0.32,1.25,0.375,1.15);
            }
            .show-nav #site-canvas {
              -webkit-transform: translateX(300px);
              transform: translateX(300px);
              
              -webkit-transform: translate3d(300px, 0, 0);
              transform: translate3d(300px, 0, 0);
            }
            #site-menu {
              width: 300px;
              height: 100%;
              position: absolute;
              top: 0;
              left: -300px;
              background: #428bca;
              padding: 15px;
            }
            body {
              box-shadow: inset 0 0 100px rgba(0,0,0,.5);
              background-color: #333;
              color: #fff;
            }
            #big-sexy {
              display: block;
              width: 50px;
              height: 50px;
              margin: 0 auto;
              font-size: 50px;
              font-weight: 300;
            }
            .padding{
                padding-left: 10px; 
            }
        </style>
    </head>
    <body>
        <div id="site-wrapper">
            <div id="site-canvas">
                <div id="site-menu">
                    <a href="#" class="toggle-nav" style="color: pink; font-size: 20px;"><i class="fa fa-times"></i></a>
                    <h2>My Menu</h1>
                    <p class="lead">Put any HTML you want here.</p>
                    <p>Style it however you want.</p>
                    <ul>
                        <li>Free to scroll up and down</li>
                        <li>But not left and write</li>
                    </ul>
                </div>
                <div class="padding"><a href="#" class="toggle-nav btn btn-lg btn-success pull-left" id="big-sexy"><i class="fa fa-bars"></i></a></div>
                <h1 class="text-center">Off Canvas Menu Tutorial</h1>             
                <p class="lead text-center">
                    Basic demo showing how to easily implement an Off Canvas Menu by 
                <a href="http://scotch.io/tutorials/off-canvas-menus-with-css3-transitions-and-transforms">scotch.io</a>.</p> 
            </div>
        </div>
    </body>
</html>
