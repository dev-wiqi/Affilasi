<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
	<title><?php echo $title; ?></title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	
	<!-- Bootstrap Extended -->
	<link href="bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet" />
	<link href="bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet" />
	
	<!-- JQueryUI v1.9.2 -->
	<link rel="stylesheet" href="theme/scripts/jquery-ui-1.9.2.custom/css/smoothness/jquery-ui-1.9.2.custom.min.css" />
	
	<!-- Glyphicons -->
	<link rel="stylesheet" href="theme/css/glyphicons.css" />
	
	<!-- Bootstrap Extended -->
	<link rel="stylesheet" href="bootstrap/extend/bootstrap-select/bootstrap-select.css" />
	<link rel="stylesheet" href="bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
	
	<!-- Uniform -->
	<link rel="stylesheet" media="screen" href="theme/scripts/pixelmatrix-uniform/css/uniform.default.css" />

	<!-- JQuery v1.8.2 -->
	<script src="theme/scripts/jquery-1.8.2.min.js"></script>
	
	<!-- Modernizr -->
	<script src="theme/scripts/modernizr.custom.76094.js"></script>
	
	<!-- MiniColors -->
	<link rel="stylesheet" media="screen" href="theme/scripts/jquery-miniColors/jquery.miniColors.css" />
	
	<!-- Theme -->
	<link rel="stylesheet" href="theme/css/style.min.css?1361377761" />
	
	
	
	<!-- LESS 2 CSS -->
	<script src="theme/scripts/less-1.3.3.min.js"></script>
        <style>
            @media screen and (max-width:980px){
                .banner-right{
                    width:auto;
                    float:right;    
                }
                
            }
        </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
		
	<div class="navbar main">
	
		<div class="container">
			<div class="row">
				<div class="span12 relativeWrap">
				<img src="theme/images/logo.png"/>
				</div>
			</div>
		</div>
	</div>
        <!--<div class="banner-right">
        <img class="responsive-img" src="theme/images/banner2.jpg"/>
        </div>-->    
	<!-- Start Content -->
	<div class="container-fluid fixed">
	 <?php echo $this->session->flashdata("result_succes"); ?>
            <?php echo $this->session->flashdata("result_email"); ?>
            <div id="content">
                <div class="row-fluid">
                    <div class="span6">
                <div class="well">
                    <center><h5 style="color:#39c4e0"><strong>Penawaran Terbatas, 11 s/d 13 September 2015</strong></h5>
                    <br/>Hanya di booth <strong>BRP Ballroom (Smesco,Sucofindo,Sovereign) di Gebyar Pernikahan Indonesia</strong>
                    <br/><strong>CASHBACK UNTIL 20juta & Free : Honeymoon/pre-wed photo/photobooth</strong>
                    <br/><i>@BalaiKartini Booth C2A & Booth A3</i>
                    <br/><strong>Info : 087882481717</strong></center>
                </div>
                    </div>
                    <div class="span6">
                        <a href="http://gedungperkawinan.com/"><img src="theme/images/bann.jpg" height="300px" width="420px"/></a>
                    </div>
                </div>
                     
            </div>
        <div id="content">  

<h3 class="glyphicons show_thumbnails_with_lines"><i></i> Register Affiliasi</h3>

<form class="form-horizontal" style="margin-bottom: 0;" method="POST" action="<?php echo base_url(); ?>Aff/submit.aspx" autocomplete="off" />
	<h4>Data Member Affilasi</h4>
	<hr class="separator line" />
	<div class="row">
		<div class="span6">
			<div class="control-group">
				<label class="control-label" for="firstname">Nama Lengkap</label>
				<div class="controls"><input class="span4" id="firstname" name="name" type="text" /></div>
			</div>
			<div class="control-group">
				<label class="control-label" for="lastname">Nomor Telp</label>
				<div class="controls"><input class="span4" id="lastname" name="contact" type="text" /></div>
			</div>
			<div class="control-group">
				<label class="control-label" for="username">Email</label>
				<div class="controls"><input class="span4" id="username" name="email" type="email" /></div>
			</div>
		</div>
	</div>
	
	<hr class="separator line" />
        <br/>
	<h4>Data Customer</h4>
	<hr class="separator line" />
	<div class="row">
		<div class="span6">
			<div class="control-group">
				<label class="control-label" for="firstname">Nama Pasangan</label>
				<div class="controls"><input class="span4" id="firstname" name="couple" type="text" /></div>
			</div>
			<div class="control-group">
				<label class="control-label" for="lastname">Nomor Telp</label>
				<div class="controls"><input class="span4" id="lastname" name="contactcouple" type="text" /></div>
			</div>
			<div class="control-group">
				<label class="control-label" for="username">Email</label>
				<div class="controls"><input class="span4" id="username" name="emailcouple" type="email" /></div>
			</div>
		</div>
		<div class="span6">
                        <div class="control-group">
				<label class="control-label" for="password">Ballroom</label>
                                <div class="controls"><select class="span4" name="ballroom"><option value="sucofindo">Sucofindo Ballroom</option><option value="smesco">Smesco Ballroom</option><option value="sovereign">Sovereign Ballroom</option></select></div>
			</div>
			<!--<div class="control-group">
				<label class="control-label" for="password">Paket Pernikahan</label>
                                <div class="controls"><select class="span4" name="wedding"><option value="edelweiss">Edelweis Package</option><option value="traditional">Traditional Package</option><option value="international">Interntional Package</option></select></div>
			</div>-->
			<div class="control-group">
				<label class="control-label" for="confirm_password">Tanggal Acara</label>
				<div class="controls"><input class="span4" id="datepicker" name="date" value class="hasDatepicker" /></div>
			</div>			
		</div>
	</div>
	
	<hr class="separator line" />

	<div class="row uniformjs">
		<div class="span8">
			<label class="checkbox" for="agree">
				<input type="checkbox" class="checkbox" id="agree" name="agree" />
				Saya Setuju Dengan Ketentuan Dan Persyaratan Yang Berlaku
			</label>
			<label class="checkbox" for="newsletter">
				<input type="checkbox" class="checkbox" id="newsletter" name="newsletter" />
				Berlangganan Email Promosi
			</label>
		</div>
	</div>

	<div class="separator"></div>
	
	<div class="form-actions">
		<button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Save</button>
		<button type="button" class="btn btn-icon btn-default glyphicons circle_remove"><i></i>Cancel</button>
	</div>
	
</form>		

		</div>

	</div>
		
	<!-- JQueryUI v1.9.2 -->
	<script src="theme/scripts/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js"></script>
	
	<!-- JQueryUI Touch Punch -->
	<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
	<script src="theme/scripts/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- MiniColors -->
	<script src="theme/scripts/jquery-miniColors/jquery.miniColors.js"></script>
	
	<!-- Themer -->
	<script>
	var themerPrimaryColor = '#71c39a';
	</script>
	<script src="theme/scripts/jquery.cookie.js"></script>
	<script src="theme/scripts/themer.js"></script>
	
	
	<!-- jQuery Validate -->
	<script src="theme/scripts/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
	<script src="theme/scripts/form_validator.js" type="text/javascript"></script>

	
	<!-- Resize Script -->
	<script src="theme/scripts/jquery.ba-resize.js"></script>
	
	<!-- Uniform -->
	<script src="theme/scripts/pixelmatrix-uniform/jquery.uniform.min.js"></script>
	
	<!-- Bootstrap Script -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Bootstrap Extended -->
	<script src="bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
	<script src="bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
	<script src="bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
	<script src="bootstrap/extend/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript"></script>
	<script src="bootstrap/extend/jasny-bootstrap/js/bootstrap-fileupload.js" type="text/javascript"></script>
	<script src="bootstrap/extend/bootbox.js" type="text/javascript"></script>
	<script src="bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js" type="text/javascript"></script>
	<script src="bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js" type="text/javascript"></script>
	
	<!-- Custom Onload Script -->
	<script src="theme/scripts/load.js"></script>
	
</body>
</html>