<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {



    } else {
        
    }

?>
        	<div class="banner-slider">
				<div class="container">
                    <div class="clearfix"></div>
                </div>    
            </div>
	<section>
    	<div class="container contact-page">
        	<div class="col-lg-6 col-md-6 no-gutters">
            	<p class="text40 text-blue text-bold">כניסת ווטרינרים</p>
				
<form id="ajax-contact" method="post" action="Login-Veterinarians.php" 
								class="form-horizontal form-contactus" role="form">
					<div class="form-group">
							<label for="name" class="col-sm-2 control-label"></label>	
							<div class="col-sm-10" 
							style='font-weight:bold;font-size:16px;color:red'>שם המשתמש או הסיסמא שגויים - אנא נסה שנית</div>
                    </div>
					
                	<div class="form-group">
                    	<label for="name" class="col-sm-2 control-label">שם:</label>
                        <div class="col-sm-10">
	                        <input type="text" class="form-control" name="name" id="name" placeholder="">
                        </div>                        
                    </div>
                	<div class="form-group">
                    	<label for="last name" class="col-sm-2 no-gutters control-label">סיסמא:</label>
                        <div class="col-sm-10">
	                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="">
                        </div>                        
                    </div>                                                          
                    <div class="step1-submit text-center">
   			               <input class="button-style2"  type="submit" value="שלח">
                    </div>                             
                </form>
            </div>     
        	<div class="col-lg-6 col-md-6 no-gutters">
            	<img src="app/images/cat8.jpg" class="img-responsive contactus-img-cat">
            </div>                                   
        </div>
	</section>
