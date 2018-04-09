<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
<title>Sistem Informasi Fakultas</title>
<link href="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>styles/login/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Staff Login Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Web-Fonts -->
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Play:700' rel='stylesheet' type='text/css'>
<!-- Web-Fonts end here -->
</head>
<body>
	<div class="header">
		<h2>SISTEM INFORMASI FAKULTAS</h2>        
	</div>
	<div class="content">
		<div class="content1">
			<img src="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>images/logo_head.png"/>
		</div>
		<div class="content2">
			<form name="loginform" action="<?php echo site_url('login/loginProcess');?>" method="post">
				<input type="text" name="username" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}">
				<input type="password" name="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}">
				<input type="submit" value="Login" name="login">
			</form>
            <a href="<?php echo site_url('home');?>" class="backtohome">Kembali ke halaman utama</a>
		</div>
        <marquee>Selamat datang di aplikasi Sistem Informasi Fakultas Teknik Universitas Victory Sorong</marquee>
	</div>
	<div class="footer">
		<p>Copyright © 2017 Sistem Informasi Fakultas Teknik. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	</div>
</body>
</html>