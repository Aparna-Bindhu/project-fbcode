<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Facebook Theme Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="http://localhost/project-fb/facebook/assets/css/bootstrap.css" rel="stylesheet">
       
        <link href="http://localhost/project-fb/facebook/assets/css/facebook.css" rel="stylesheet">
    </head>
    
    <body style="background-color: #e9eaed">
        
        
				 <div class="container-fluid"> 
                  <div class="row">
					<div class="column col-sm-12 col-xs-12" id="main">
						
						<!-- top nav -->
						<div class="navbar navbar-blue navbar-static-top">  
							<div class="navbar-header">
							  <!-- <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse"> 
								<span class="sr-only">Toggle</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							   </button> -->
							  <a href="http://usebootstrap.com/theme/facebook" class="navbar-brand logo">b</a>
							  </div>
							  <button id="but">Login</button>
						</div>
						
					</div>	
					</div>
				</div>

		
        <!-- <script type="text/javascript"> 
        $(document).ready(function() {
			$('[data-toggle=offcanvas]').click(function() {
				$(this).toggleClass('visible-xs text-center');
				$(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
				$('.row-offcanvas').toggleClass('active');
				$('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
				$('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
				$('#btnShow').toggle();
			});
        });
        </script> -->
        <script type="text/javascript">
        	$(document).ready(function(){
        		$('button').click(function(){
        			$('div').animate({left:'400px'},'slow');
        		});
        	});
        </script>
</body>
</html>