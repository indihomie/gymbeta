<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Website GYM</title>
<link href="<?php echo base_url()?>assets2/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()?>assets2/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?php echo base_url()?>assets2/js/jquery.min.js"></script>
</head>
<body>
    <!-- start header_bottom -->
    <div class="header-bottom">
		 <div class="container">
		   <div class="clear"></div>
		</div>
    </div>
    <!-- start menu -->
    <div class="menu">
	  <div class="container">
		 <div class="logo">
			<a href="index.html"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
       <div class="main">
          <div class="login_top">
          	<div class="container">
			  <div class="col-md-6">
				 <div class="login-page">
					<h4 class="title">GYM</h4>
					<p>Pusat kebugaran (juga dikenal sebagai klab kebugaran, klab fitnes, klab kesehatan, atau kadang disebut gym) adalah tempat yang menyimpan alat latihan fisik untuk keperluan latihan fisik demi kebugaran.</p>
				  </div>
				</div>
				<div class="col-md-6">
				 <div class="login-page">
				  <div class="login-title">
	           		<h4 class="title">Login Customer</h4>
					<div id="loginbox" class="loginbox">
						   <form class="login-form" action="<?php echo base_url('customerlogin/aksi_login'); ?>" method="post">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">Nama Customer</label>
						    <input type="text" placeholder="nama_customer" name="nama_customer"/>
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">Password</label>
						       <input type="password" placeholder="password" name="password"/>
						    </p>
						    <div class="remember">
							    <p id="login-form-remember">
							      <label for="modlgn_remember"><a href="#">Forget Your Password ? </a></label>
							   </p>
							    <input type="submit" name="Submit" class="button" value="Login"><div class="clear"></div>
							 </div>
						  </fieldset>
						 </form>
					</div>
			      </div>
				</div>
				<div class="clear"></div>
			  </div>
			</div>
		  </div>
         </div>
         <div class="footer-bottom">
		   <div class="container">
		 	 <div class="row section group">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<div class="f-logo">
						<img src="<?php echo base_url()?>assets2/images/logo.png" alt=""/>
					</div>
				</div>
				<div class="col-md-4">
				</div>
				<div class="clear"></div>
	  		  </div>
		 	</div>
		 </div>
		 <div class="copyright">
		  <div class="container">
		    <div class="copy">
		        <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
		    </div>
		  </div>
	   </div>
</body>
</html>