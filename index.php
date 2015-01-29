<!DOCTYPE html>
<html lang="en" data-ng-app="frontendApp">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>מרפאט - שירותי בריאות לחיות מחמד - דף הבית</title>

	<link href="app/css/global/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="app/css/global/bootstrap-rtl.min.css">
	<link href="app/css/main.css" rel="stylesheet">
	<!--[if lt IE 9]>
	  <script src="app/js/html5shiv.js"></script>
	  <script src="app/js/respond.min.js"></script>
	<![endif]-->
    <script src="app/js/global/plugins/jquery.min.js" type="text/javascript"></script>
	<link rel="shortcut icon" href="app/images/favicon.png">
	<script src="app/js/pace.js"></script>
</head>

<body>
	<header>
    	<div class="header-top">
            <div class="container">
        		<div class="row">
	                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
						<div class="text-left">
                            <span class="link-callus">חייג אלינו:</span>                           
                            <span class="callus-phone">073-240-9505</span>
                        </div>    
                     </div>
                	 <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                     <ul class="top-links list-inline">
	                        <li class="link-customerLogin"><a 
		href='Login.html'>כניסת לקוחות</a></li>
                            <li class="link-veterinarian"><a 
		href='Login-Veterinarians.html'>כניסת וטרינר</a></li>                        	
                            <li class="link-contactus"><a href="#/contact-us">צור קשר</a></li>
                        </ul>
                     </div>					 
                </div>
            </div>    
        </div>
        
        	<div class="header-middle">
	        	<div class="container">
                	<div class="header-logo clearfix">
                        <div class="logo col-lg-2 col-md-2 col-sm-2 col-xs-3 no-gutters">
                            <a href='#/'><img
							id="logo" src="app/images/logo.png"  class="img-responsive" alt="cat insurance" >
							</a>
                        </div>
                        <div class="logocat col-lg-10 col-md-10 col-sm-10 col-xs-9 no-gutters" style="padding: 0 !important;">
                            <img src="app/images/logocat.jpg" class="img-responsive" alt="cat insurance" >
                        </div>
                      </div>  
                	<nav class="navbar navbar-default navbar-menu" role="navigation">
                    	<div class="container-fluid no-gutters">
                        	<div class="navbar-header no-gutters">
                                <a href="Request-Quote.html" class="get-quote"><span>קבל הצעת מחיר</span></a>                            
                            	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                             	</button>
                            </div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
                                <li><a href="#/"class="home selected"><span class="navlabel">דף הבית</span></a></li>
                                <li class="dropdown">
                                	<a href="#/about"
onclick='menuGo("#/about")'
class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    	<span class="navlabel"
										>&nbsp;&nbsp;על השירות&nbsp;&nbsp;<span
										 class="caret"></span></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href='about-us.html' class="service">על השירות</a></li>
                                        <li><a href="What-we-cover.html" class="solution">מה אנו מכסים</a></li>
                                        <li><a href="faq.html" class="solution">שאלות נפוצות</a></li>
                                    </ul>
                                </li>
		
                                <li class="dropdown">
                                	<a href="#/plans" class="dropdown-toggle"
onclick='menuGo("#/plans")'
data-toggle="dropdown" role="button" aria-expanded="false">
                                    	<span class="navlabel">&nbsp;תכניות כיסוי&nbsp;<span class="caret"></span></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href='plans.html' class="solution">תוכניות כיסוי</a></li>
                                        <li><a href='Service-for-the-dog.html' class="solution">השירות לכלב</a></li>
                                        <li><a href="Service-for-the-cat.html" class="solution">השירות לחתול</a></li>
                                    </ul>
                                </li>

                                <li><a href="#/for-Veterinarians" class="for-veterinarians last"><span class="navlabel">לוטרינרים</span></a></li>
                            </ul>
                            </div>                            
                       </div> 
                    </nav>
    			</div>	
    		</div>
    </header> 
        	<div ng-view></div>
  <footer>
    	<div class="footer">        	
            <div class="container">
            	<div class="footer-top clearfix">
                	<div class="col-md-4 col-md-4 col-sm-4 col-xs-6 footer-logo">
	                    <img src="app/images/footer_icon.png" class="img-responsive">
                    </div>                	
                </div>
            	<div class="footer-middle clearfix">
                   <div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
                        <ul>
                            <li><a href="#/about">על השירות</a></li>
                            <li><a href="#/what-we-cover">מה אנו מכסים</a></li>
							<li><a href="#/plans">תוכניות</a></li>
							<li><a href="#/service-for-the-dog">השירות לכלב</a></li>
							<li><a href="#/service-for-the-cat">השירות לחתול</a></li>
                        </ul>
                    </div>                
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
                        <ul>						
                            <li><a href="#/terms-and-conditions">תנאים והגבלות</a></li>
                            <li><a href="#/faq">שאלות נפוצות</a></li>
                            <li><a href="#/for-Veterinarians">וטרינרים</a></li>
							<li><a href="#/contact-us">צור קשר</a></li>
                        </ul>
                    </div>         
               </div>                        
               <div class="footer-bottom clearfix">
               	<p class="">2014 © מרפאט בע"מ שירותי בריאות לחיות מחמד</p>
               </div>
            </div>
        </div>
    </footer>
    
<script>
 $(function() {
    $('.scrollto, .gototop').bind('click',function(event){
		 var $anchor = $(this);
		 $('html, body').stop().animate({
         scrollTop: $($anchor.attr('href')).offset().top
          }, 1500,'easeInOutExpo');
     event.preventDefault();
      });
	  $('.dropdown-menu').hover(function(){
		$(this).prev('.dropdown-toggle').addClass('hover');
  		},function() {
    	$(this).prev('.dropdown-toggle').removeClass( "hover" );
	});
});
 $(function() {
	var eHeight = [];
	$('	.hp-benifits').each(function() {
		eHeight.push($(this).outerHeight());
	});
	$('.hp-benifits').promise().done(function(){
				maxHeight = Math.max.apply(Math,eHeight);
				$(this).css('height',maxHeight);		
		});
});
</script>
 
</body>
<!-- BEGIN CORE JQUERY PLUGINS -->
<!--[if lt IE 9]>
<script src="app/js/global/plugins/respond.min.js"></script>
<script src="app/js/global/plugins/excanvas.min.js"></script>
<![endif]-->

<!-- END CORE JQUERY PLUGINS -->

<script src="app/js/angular.min.js"></script>
<script src="app/js/angular-route.min.js"></script>
<script src="app/js/angular-animate.min.js" ></script>
<script src="app/js/toaster.js"></script>
<script src="app/js/ui-bootstrap-tpls.min.js"></script>
<script src="app/scripts/app.js"></script>
<script src="app/scripts/services/data.js"></script>
<script src="app/scripts/directives/directives.js"></script>
<script src="app/scripts/controllers/mainCtrl.js"></script>
</html>
